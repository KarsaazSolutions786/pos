<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "karsaaz_pos_at_localhost" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "karsaaz_pos_at_localhost";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->getDefault();
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->getDefault();
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "karsaaz_pos_at_localhost";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "karsaaz_pos_at_localhost";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "karsaaz_pos_at_localhost";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["GLTD"] = "karsaaz_pos_at_localhost";
		$connectionsIds["GltH"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pAccounts"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pCustomer"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pEmployee"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pProductItems"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pSupplier"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psAccountSubGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psChartofAccounts"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psCustomerGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psEmployeeGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psProductGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psSupplierGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psUnits"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psUserGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["umUserInfo"] = "karsaaz_pos_at_localhost";
		$connectionsIds["tSaleH"] = "karsaaz_pos_at_localhost";
		$connectionsIds["tSaleD"] = "karsaaz_pos_at_localhost";
		$connectionsIds["admin_rights"] = "karsaaz_pos_at_localhost";
		$connectionsIds["admin_members"] = "karsaaz_pos_at_localhost";
		$connectionsIds["admin_users"] = "karsaaz_pos_at_localhost";
		$connectionsIds["karsaaz_posugrights"] = "karsaaz_pos_at_localhost";
		$connectionsIds["karsaaz_posugmembers"] = "karsaaz_pos_at_localhost";
		$connectionsIds["karsaaz_posuggroups"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pBU"] = "karsaaz_pos_at_localhost";
		$connectionsIds["AccountCBal"] = "karsaaz_pos_at_localhost";
		$connectionsIds["pBank"] = "karsaaz_pos_at_localhost";
		$connectionsIds["psBankGroup"] = "karsaaz_pos_at_localhost";
		$connectionsIds["sClosingMonth"] = "karsaaz_pos_at_localhost";
		$connectionsIds["comission_group"] = "karsaaz_pos_at_localhost";
		$connectionsIds["comission_group_detail"] = "karsaaz_pos_at_localhost";
		$connectionsIds["label_codes"] = "karsaaz_pos_at_localhost";
		$connectionsIds["label_groups"] = "karsaaz_pos_at_localhost";
		$connectionsIds["language_lael"] = "karsaaz_pos_at_localhost";
		$connectionsIds["languages"] = "karsaaz_pos_at_localhost";
		$connectionsIds["selected_lanugage"] = "karsaaz_pos_at_localhost";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>