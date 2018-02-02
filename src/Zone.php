<?php
namespace CloudVerve\GslbMe;

class Zone extends Client
{

  /**
   * Get zone configuration and records
   *
   * @return object
   */
  public function get()
  {

    $endpoint = $this->apiUrl . 'zone/' . $this->zone;
    return $this->client->request( 'GET', $endpoint, $this->auth );

  }

  /**
   * Enable/disable a zone
   *
   * @param string $state 'enable' or 'disable'
   * @return array
   */
  public function setState( $state )
  {
    $this->zone;
  }

  /**
   * Create a new zone
   *
   * @param string $state 'enable' or 'disable'
   * @return array
   */
  public function create( $state = 'enable'  )
  {
    $this->zone;
  }

  /**
   * Delete an existing zone
   *
   * @return array
   */
  public function delete()
  {
    $this->zone;
  }

  /**
   * Commits pending changing for an existing zone
   *
   * @return array
   */
  public function commit()
  {
    $this->zone;
  }

  /**
   * Get zone records
   *
   * @return array
   */
  public function getRecords( $type = null )
  {
    $this->zone;
  }

  /**
   * Add record to zone
   *
   * @param string $recordType Supported types are A, AAAA, ALIAS, CAA, CERT,
   *    CNAME, LOC, MX, NS, RP, SOA, SPF, SRV, and TXT
   * @param string $recordName Name of record (ex: 'www' for 'www.zonename.com')
   * @param string $recordValue Value of record (ex: IP address for A record,
   *    string for TXT record)
   * @param int $recordTTL TTL in seconds, range 30 to 86400
   * @return array
   */
  public function addRecord( $recordType, $recordName, $recordValue, $recordTTL = 28800 )
  {
    $this->zone;
  }

  /**
   * Modify a zone record
   *
   * @param string $recordID ID of record to modify, returned from getRecords()
   * @param string $recordType Supported types are A, AAAA, ALIAS, CAA, CERT,
   *    CNAME, LOC, MX, NS, RP, SOA, SPF, SRV, and TXT
   * @param string $recordName Name of record (ex: 'www' for 'www.zonename.com')
   * @param string $recordValue Value of record (ex: IP address for A record,
   *    string for TXT record)
   * @param int $recordTTL TTL in seconds, range 30 to 86400
   * @return array
   */
  public function modifyRecord( $recordID, $recordType, $recordName, $recordValue, $recordTTL = 28800 )
  {
    $this->zone;
  }

  /**
   * Delete a zone record
   *
   * @param string $recordID ID of record to modify, returned from getRecords()
   * @return array
   */
  public function deleteRecord( $recordID )
  {
    $this->zone;
  }

}
