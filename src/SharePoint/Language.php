<?php

/**
 * Updated By PHP Office365 Generator 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValueObject;
/**
 * Represents 
 * a natural language.
 */
class Language extends ClientValueObject
{
    /**
     * Specifies 
     * the name of the language as displayed in the user interface.
     * @var string
     */
    public $DisplayName;
    /**
     * Specifies 
     * the corresponding culture name for the 
     * language.
     * @var string
     */
    public $LanguageTag;
    /**
     * Specifies 
     * the language 
     * code identifier (LCID) for the language.
     * @var integer
     */
    public $Lcid;
}