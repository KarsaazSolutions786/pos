<?php
include("../include/dbcommon.php");
header('Content-Type: application/json');

try {
    $language_id = isset($_GET['language_id']) ? (int)$_GET['language_id'] : 0;

    if ($language_id <= 0) {
        // Get default language from selected_lanugage table
        $rs = DB::Query("SELECT language_id FROM selected_lanugage LIMIT 1");
        $row = $rs ? $rs->fetchAssoc() : null;
        $language_id = $row ? (int)$row['language_id'] : 1;
    }

    // Fetch translations joined with label keys
    $sql = "SELECT lc.name AS label_key, ll.label_text
            FROM language_lael ll
            INNER JOIN label_codes lc ON ll.label_id = lc.id
            WHERE ll.language_id = " . $language_id;

    $rs = DB::Query($sql);

    $translations = [];
    if ($rs) {
        while ($row = $rs->fetchAssoc()) {
            $translations[$row['label_key']] = $row['label_text'];
        }
    }

    // Also fetch the language info
    $langSql = "SELECT id, name, direction, lang_code, icon FROM languages WHERE id = " . $language_id;
    $langRs = DB::Query($langSql);
    $language = $langRs ? $langRs->fetchAssoc() : null;

    echo json_encode([
        'success' => true,
        'language' => $language,
        'translations' => $translations,
        'count' => count($translations)
    ]);

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch translations: ' . $e->getMessage()]);
}
