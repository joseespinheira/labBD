<?php
/** @package    C9::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * UsersMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the UsersDAO to the users datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package C9::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class UsersMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Id"] = new FieldMap("Id","users","id",true,FM_TYPE_INT,10,null,true);
			self::$FM["Name"] = new FieldMap("Name","users","name",false,FM_TYPE_VARCHAR,191,null,false);
			self::$FM["Email"] = new FieldMap("Email","users","email",false,FM_TYPE_VARCHAR,191,null,false);
			self::$FM["Password"] = new FieldMap("Password","users","password",false,FM_TYPE_VARCHAR,191,null,false);
			self::$FM["RememberToken"] = new FieldMap("RememberToken","users","remember_token",false,FM_TYPE_VARCHAR,100,null,false);
			self::$FM["CreatedAt"] = new FieldMap("CreatedAt","users","created_at",false,FM_TYPE_TIMESTAMP,null,null,false);
			self::$FM["UpdatedAt"] = new FieldMap("UpdatedAt","users","updated_at",false,FM_TYPE_TIMESTAMP,null,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
		}
		return self::$KM;
	}

}

?>