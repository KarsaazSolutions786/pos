<?php
include("../include/dbcommon.php");
header('Content-Type: application/json');

try {
    $sql = "SELECT id, name, direction, active, lang_code, icon FROM languages WHERE active = 1 ORDER BY id";
    $rs = DB::Query($sql);

    $languages = [];
    if ($rs) {
        while ($row = $rs->fetchAssoc()) {
            $languages[] = $row;
        }
    }

    // Get selected language
    $selRs = DB::Query("SELECT language_id FROM selected_lanugage LIMIT 1");
    $selRow = $selRs ? $selRs->fetchAssoc() : null;
    $selectedLanguageId = $selRow ? (int)$selRow['language_id'] : 1;

    echo json_encode([
        'success' => true,
        'languages' => $languages,
        'selected_language_id' => $selectedLanguageId
    ]);

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch languages: ' . $e->getMessage()]);
}
