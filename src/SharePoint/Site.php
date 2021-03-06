<?php

/**
 * Updated By PHP Office365 Generator 2020-04-22T21:38:25+00:00 16.0.20008.12009
 */
namespace Office365\SharePoint;

use Office365\Runtime\InvokePostMethodQuery;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Represents 
 * a collection of sites (2) in a Web 
 * application, including a top-level site and 
 * all of its subsites.The CanUpgrade, CommentsOnSitePagesDisabled, 
 * ServerRelativePath, ShowPeoplePickerSuggestionsForGuestUsers, StatusBarLink, 
 * StatusBarText, ThicketSupportDisabled, UpgradeInfo and Usage properties are not 
 * included in the default scalar property set 
 * for this type.
 */
class Site extends ClientObject
{
    /**
     * Returns the site with the specified GUID
     * @param string $webId
     * @return Web
     */
    public function openWebById($webId)
    {
        $web = new Web($this->getContext(), $this->getResourcePath());
        $qry = new InvokePostMethodQuery($this, "openWebById", array($webId));
        $this->getContext()->addQueryAndResultObject($qry, $web);
        return $web;
    }
    /**
     * @return Web
     */
    public function getRootWeb()
    {
        if (!$this->isPropertyAvailable("RootWeb")) {
            $this->setProperty("RootWeb", new Web($this->getContext(), new ResourcePath("RootWeb", $this->getResourcePath())));
        }
        return $this->getProperty("RootWeb");
    }
    /**
     * @return UserCustomActionCollection
     */
    public function getUserCustomActions()
    {
        if (!$this->isPropertyAvailable("UserCustomActions")) {
            $this->setProperty("UserCustomActions", new UserCustomActionCollection($this->getContext(), new ResourcePath("UserCustomActions", $this->getResourcePath())));
        }
        return $this->getProperty("UserCustomActions");
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * to create declarative workflows 
     * on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowCreateDeclarativeWorkflowForCurrentUser 
     * (section 3.2.5.143.1.1.31), 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @return bool
     */
    public function getAllowCreateDeclarativeWorkflow()
    {
        if (!$this->isPropertyAvailable("AllowCreateDeclarativeWorkflow")) {
            return null;
        }
        return $this->getProperty("AllowCreateDeclarativeWorkflow");
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * to create declarative workflows 
     * on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowCreateDeclarativeWorkflowForCurrentUser 
     * (section 3.2.5.143.1.1.31), 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @var bool
     */
    public function setAllowCreateDeclarativeWorkflow($value)
    {
        $this->setProperty("AllowCreateDeclarativeWorkflow", $value, true);
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowDesignerForCurrentUser, which is 
     * the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @return bool
     */
    public function getAllowDesigner()
    {
        if (!$this->isPropertyAvailable("AllowDesigner")) {
            return null;
        }
        return $this->getProperty("AllowDesigner");
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowDesignerForCurrentUser, which is 
     * the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @var bool
     */
    public function setAllowDesigner($value)
    {
        $this->setProperty("AllowDesigner", $value, true);
    }
    /**
     * @return integer
     */
    public function getAllowExternalEmbeddingWrapper()
    {
        if (!$this->isPropertyAvailable("AllowExternalEmbeddingWrapper")) {
            return null;
        }
        return $this->getProperty("AllowExternalEmbeddingWrapper");
    }
    /**
     * @var integer
     */
    public function setAllowExternalEmbeddingWrapper($value)
    {
        $this->setProperty("AllowExternalEmbeddingWrapper", $value, true);
    }
    /**
     * Specifies 
     * whether master page editing is allowed on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowMasterPageEditingForCurrentUser, 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "false".
     * @return bool
     */
    public function getAllowMasterPageEditing()
    {
        if (!$this->isPropertyAvailable("AllowMasterPageEditing")) {
            return null;
        }
        return $this->getProperty("AllowMasterPageEditing");
    }
    /**
     * Specifies 
     * whether master page editing is allowed on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowMasterPageEditingForCurrentUser, 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "false".
     * @var bool
     */
    public function setAllowMasterPageEditing($value)
    {
        $this->setProperty("AllowMasterPageEditing", $value, true);
    }
    /**
     * Specifies 
     * whether this site collection can 
     * be reverted to its base template. See Microsoft.SharePoint.Client.Web.AllowRevertFromTemplateForCurrentUser, 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "false".
     * @return bool
     */
    public function getAllowRevertFromTemplate()
    {
        if (!$this->isPropertyAvailable("AllowRevertFromTemplate")) {
            return null;
        }
        return $this->getProperty("AllowRevertFromTemplate");
    }
    /**
     * Specifies 
     * whether this site collection can 
     * be reverted to its base template. See Microsoft.SharePoint.Client.Web.AllowRevertFromTemplateForCurrentUser, 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "false".
     * @var bool
     */
    public function setAllowRevertFromTemplate($value)
    {
        $this->setProperty("AllowRevertFromTemplate", $value, true);
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * to save declarative workflows 
     * as a template on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowSaveDeclarativeWorkflowAsTemplateForCurrentUser 
     * (section 3.2.5.143.1.1.32), 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @return bool
     */
    public function getAllowSaveDeclarativeWorkflowAsTemplate()
    {
        if (!$this->isPropertyAvailable("AllowSaveDeclarativeWorkflowAsTemplate")) {
            return null;
        }
        return $this->getProperty("AllowSaveDeclarativeWorkflowAsTemplate");
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * to save declarative workflows 
     * as a template on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowSaveDeclarativeWorkflowAsTemplateForCurrentUser 
     * (section 3.2.5.143.1.1.32), 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @var bool
     */
    public function setAllowSaveDeclarativeWorkflowAsTemplate($value)
    {
        $this->setProperty("AllowSaveDeclarativeWorkflowAsTemplate", $value, true);
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * to save or publish declarative workflows 
     * on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowSavePublishDeclarativeWorkflowForCurrentUser 
     * (section 3.2.5.143.1.1.33), 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @return bool
     */
    public function getAllowSavePublishDeclarativeWorkflow()
    {
        if (!$this->isPropertyAvailable("AllowSavePublishDeclarativeWorkflow")) {
            return null;
        }
        return $this->getProperty("AllowSavePublishDeclarativeWorkflow");
    }
    /**
     * Specifies 
     * whether a designer can be used 
     * to save or publish declarative workflows 
     * on this site collection. See 
     * Microsoft.SharePoint.Client.Web.AllowSavePublishDeclarativeWorkflowForCurrentUser 
     * (section 3.2.5.143.1.1.33), 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "true".
     * @var bool
     */
    public function setAllowSavePublishDeclarativeWorkflow($value)
    {
        $this->setProperty("AllowSavePublishDeclarativeWorkflow", $value, true);
    }
    /**
     * Specifies 
     * whether a version-to-version site collection 
     * upgrade is allowed on this site collection.<90> 
     * "true" if it is; otherwise, "false".
     * @return bool
     */
    public function getAllowSelfServiceUpgrade()
    {
        if (!$this->isPropertyAvailable("AllowSelfServiceUpgrade")) {
            return null;
        }
        return $this->getProperty("AllowSelfServiceUpgrade");
    }
    /**
     * Specifies 
     * whether a version-to-version site collection 
     * upgrade is allowed on this site collection.<90> 
     * "true" if it is; otherwise, "false".
     * @var bool
     */
    public function setAllowSelfServiceUpgrade($value)
    {
        $this->setProperty("AllowSelfServiceUpgrade", $value, true);
    }
    /**
     * Specifies 
     * whether upgrade evaluation site 
     * collection is allowed to be created for this site 
     * collection.<91> 
     * "true" if it is; otherwise, "false".
     * @return bool
     */
    public function getAllowSelfServiceUpgradeEvaluation()
    {
        if (!$this->isPropertyAvailable("AllowSelfServiceUpgradeEvaluation")) {
            return null;
        }
        return $this->getProperty("AllowSelfServiceUpgradeEvaluation");
    }
    /**
     * Specifies 
     * whether upgrade evaluation site 
     * collection is allowed to be created for this site 
     * collection.<91> 
     * "true" if it is; otherwise, "false".
     * @var bool
     */
    public function setAllowSelfServiceUpgradeEvaluation($value)
    {
        $this->setProperty("AllowSelfServiceUpgradeEvaluation", $value, true);
    }
    /**
     * Gets or 
     * sets the number of days of audit log data to retain. If unset and audit 
     * trimming is enabled, the retention defaults to one schedule window of the 
     * administrator-configured schedule for trimming.
     * @return integer
     */
    public function getAuditLogTrimmingRetention()
    {
        if (!$this->isPropertyAvailable("AuditLogTrimmingRetention")) {
            return null;
        }
        return $this->getProperty("AuditLogTrimmingRetention");
    }
    /**
     * Gets or 
     * sets the number of days of audit log data to retain. If unset and audit 
     * trimming is enabled, the retention defaults to one schedule window of the 
     * administrator-configured schedule for trimming.
     * @var integer
     */
    public function setAuditLogTrimmingRetention($value)
    {
        $this->setProperty("AuditLogTrimmingRetention", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanSyncHubSitePermissions()
    {
        if (!$this->isPropertyAvailable("CanSyncHubSitePermissions")) {
            return null;
        }
        return $this->getProperty("CanSyncHubSitePermissions");
    }
    /**
     * @var bool
     */
    public function setCanSyncHubSitePermissions($value)
    {
        $this->setProperty("CanSyncHubSitePermissions", $value, true);
    }
    /**
     * Specifies 
     * whether this site collection is 
     * in an implementation-specific valid state for site collection upgrade, 
     * "true" if it is; otherwise, "false".<89>
     * @return bool
     */
    public function getCanUpgrade()
    {
        if (!$this->isPropertyAvailable("CanUpgrade")) {
            return null;
        }
        return $this->getProperty("CanUpgrade");
    }
    /**
     * Specifies 
     * whether this site collection is 
     * in an implementation-specific valid state for site collection upgrade, 
     * "true" if it is; otherwise, "false".<89>
     * @var bool
     */
    public function setCanUpgrade($value)
    {
        $this->setProperty("CanUpgrade", $value, true);
    }
    /**
     * Gets or 
     * sets the classification of this site.
     * @return string
     */
    public function getClassification()
    {
        if (!$this->isPropertyAvailable("Classification")) {
            return null;
        }
        return $this->getProperty("Classification");
    }
    /**
     * Gets or 
     * sets the classification of this site.
     * @var string
     */
    public function setClassification($value)
    {
        $this->setProperty("Classification", $value, true);
    }
    /**
     * Indicates 
     * whether comments on site pages are disabled or not.
     * @return bool
     */
    public function getCommentsOnSitePagesDisabled()
    {
        if (!$this->isPropertyAvailable("CommentsOnSitePagesDisabled")) {
            return null;
        }
        return $this->getProperty("CommentsOnSitePagesDisabled");
    }
    /**
     * Indicates 
     * whether comments on site pages are disabled or not.
     * @var bool
     */
    public function setCommentsOnSitePagesDisabled($value)
    {
        $this->setProperty("CommentsOnSitePagesDisabled", $value, true);
    }
    /**
     * Specifies 
     * the compatibility level of the site collection for 
     * the purpose of major version level compatibility checks.<86>
     * @return integer
     */
    public function getCompatibilityLevel()
    {
        if (!$this->isPropertyAvailable("CompatibilityLevel")) {
            return null;
        }
        return $this->getProperty("CompatibilityLevel");
    }
    /**
     * Specifies 
     * the compatibility level of the site collection for 
     * the purpose of major version level compatibility checks.<86>
     * @var integer
     */
    public function setCompatibilityLevel($value)
    {
        $this->setProperty("CompatibilityLevel", $value, true);
    }
    /**
     * @return string
     */
    public function getComplianceAttribute()
    {
        if (!$this->isPropertyAvailable("ComplianceAttribute")) {
            return null;
        }
        return $this->getProperty("ComplianceAttribute");
    }
    /**
     * @var string
     */
    public function setComplianceAttribute($value)
    {
        $this->setProperty("ComplianceAttribute", $value, true);
    }
    /**
     * Gets the 
     * current change token that is used in the change log for the site collection.
     * @return ChangeToken
     */
    public function getCurrentChangeToken()
    {
        if (!$this->isPropertyAvailable("CurrentChangeToken")) {
            return null;
        }
        return $this->getProperty("CurrentChangeToken");
    }
    /**
     * Gets the 
     * current change token that is used in the change log for the site collection.
     * @var ChangeToken
     */
    public function setCurrentChangeToken($value)
    {
        $this->setProperty("CurrentChangeToken", $value, true);
    }
    /**
     * @return bool
     */
    public function getDisableAppViews()
    {
        if (!$this->isPropertyAvailable("DisableAppViews")) {
            return null;
        }
        return $this->getProperty("DisableAppViews");
    }
    /**
     * @var bool
     */
    public function setDisableAppViews($value)
    {
        $this->setProperty("DisableAppViews", $value, true);
    }
    /**
     * Specifies 
     * whether company-wide sharing links are disabled on all child sites. True means 
     * company-wide sharing links are disabled throughout the site collection, 
     * regardless of the settings on the root or child sites. False means each site 
     * can individually decide whether to turn on or off company-wide sharing links.
     * @return bool
     */
    public function getDisableCompanyWideSharingLinks()
    {
        if (!$this->isPropertyAvailable("DisableCompanyWideSharingLinks")) {
            return null;
        }
        return $this->getProperty("DisableCompanyWideSharingLinks");
    }
    /**
     * Specifies 
     * whether company-wide sharing links are disabled on all child sites. True means 
     * company-wide sharing links are disabled throughout the site collection, 
     * regardless of the settings on the root or child sites. False means each site 
     * can individually decide whether to turn on or off company-wide sharing links.
     * @var bool
     */
    public function setDisableCompanyWideSharingLinks($value)
    {
        $this->setProperty("DisableCompanyWideSharingLinks", $value, true);
    }
    /**
     * @return bool
     */
    public function getDisableFlows()
    {
        if (!$this->isPropertyAvailable("DisableFlows")) {
            return null;
        }
        return $this->getProperty("DisableFlows");
    }
    /**
     * @var bool
     */
    public function setDisableFlows($value)
    {
        $this->setProperty("DisableFlows", $value, true);
    }
    /**
     * Gets a Boolean value that 
     * specifies whether users will be greeted with a notification bar telling them 
     * that the site can be shared with external users. The value is true if the 
     * notification bar is enabled; otherwise, it is false. 
     * @return bool
     */
    public function getExternalSharingTipsEnabled()
    {
        if (!$this->isPropertyAvailable("ExternalSharingTipsEnabled")) {
            return null;
        }
        return $this->getProperty("ExternalSharingTipsEnabled");
    }
    /**
     * Gets a Boolean value that 
     * specifies whether users will be greeted with a notification bar telling them 
     * that the site can be shared with external users. The value is true if the 
     * notification bar is enabled; otherwise, it is false. 
     * @var bool
     */
    public function setExternalSharingTipsEnabled($value)
    {
        $this->setProperty("ExternalSharingTipsEnabled", $value, true);
    }
    /**
     * @return integer
     */
    public function getExternalUserExpirationInDays()
    {
        if (!$this->isPropertyAvailable("ExternalUserExpirationInDays")) {
            return null;
        }
        return $this->getProperty("ExternalUserExpirationInDays");
    }
    /**
     * @var integer
     */
    public function setExternalUserExpirationInDays($value)
    {
        $this->setProperty("ExternalUserExpirationInDays", $value, true);
    }
    /**
     * @return string
     */
    public function getGeoLocation()
    {
        if (!$this->isPropertyAvailable("GeoLocation")) {
            return null;
        }
        return $this->getProperty("GeoLocation");
    }
    /**
     * @var string
     */
    public function setGeoLocation($value)
    {
        $this->setProperty("GeoLocation", $value, true);
    }
    /**
     * @return string
     */
    public function getGroupId()
    {
        if (!$this->isPropertyAvailable("GroupId")) {
            return null;
        }
        return $this->getProperty("GroupId");
    }
    /**
     * @var string
     */
    public function setGroupId($value)
    {
        $this->setProperty("GroupId", $value, true);
    }
    /**
     * @return string
     */
    public function getHubSiteId()
    {
        if (!$this->isPropertyAvailable("HubSiteId")) {
            return null;
        }
        return $this->getProperty("HubSiteId");
    }
    /**
     * @var string
     */
    public function setHubSiteId($value)
    {
        $this->setProperty("HubSiteId", $value, true);
    }
    /**
     * Specifies 
     * the GUID 
     * that identifies the site collection.
     * @return string
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the GUID 
     * that identifies the site collection.
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @return string
     */
    public function getSensitivityLabelId()
    {
        if (!$this->isPropertyAvailable("SensitivityLabelId")) {
            return null;
        }
        return $this->getProperty("SensitivityLabelId");
    }
    /**
     * @var string
     */
    public function setSensitivityLabelId($value)
    {
        $this->setProperty("SensitivityLabelId", $value, true);
    }
    /**
     * @return string
     */
    public function getSensitivityLabel()
    {
        if (!$this->isPropertyAvailable("SensitivityLabel")) {
            return null;
        }
        return $this->getProperty("SensitivityLabel");
    }
    /**
     * @var string
     */
    public function setSensitivityLabel($value)
    {
        $this->setProperty("SensitivityLabel", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsHubSite()
    {
        if (!$this->isPropertyAvailable("IsHubSite")) {
            return null;
        }
        return $this->getProperty("IsHubSite");
    }
    /**
     * @var bool
     */
    public function setIsHubSite($value)
    {
        $this->setProperty("IsHubSite", $value, true);
    }
    /**
     * Specifies 
     * the comment that is used when a site collection is 
     * locked.<87>
     * @return string
     */
    public function getLockIssue()
    {
        if (!$this->isPropertyAvailable("LockIssue")) {
            return null;
        }
        return $this->getProperty("LockIssue");
    }
    /**
     * Specifies 
     * the comment that is used when a site collection is 
     * locked.<87>
     * @var string
     */
    public function setLockIssue($value)
    {
        $this->setProperty("LockIssue", $value, true);
    }
    /**
     * Specifies 
     * the maximum number of list items allowed 
     * to be returned for each retrieve request before throttling occurs. If 
     * throttling occurs, list items MUST NOT be returned.
     * @return integer
     */
    public function getMaxItemsPerThrottledOperation()
    {
        if (!$this->isPropertyAvailable("MaxItemsPerThrottledOperation")) {
            return null;
        }
        return $this->getProperty("MaxItemsPerThrottledOperation");
    }
    /**
     * Specifies 
     * the maximum number of list items allowed 
     * to be returned for each retrieve request before throttling occurs. If 
     * throttling occurs, list items MUST NOT be returned.
     * @var integer
     */
    public function setMaxItemsPerThrottledOperation($value)
    {
        $this->setProperty("MaxItemsPerThrottledOperation", $value, true);
    }
    /**
     * Specifies 
     * whether the site needs a Build-to-Build upgrade. 
     * @return bool
     */
    public function getNeedsB2BUpgrade()
    {
        if (!$this->isPropertyAvailable("NeedsB2BUpgrade")) {
            return null;
        }
        return $this->getProperty("NeedsB2BUpgrade");
    }
    /**
     * Specifies 
     * whether the site needs a Build-to-Build upgrade. 
     * @var bool
     */
    public function setNeedsB2BUpgrade($value)
    {
        $this->setProperty("NeedsB2BUpgrade", $value, true);
    }
    public function setResourcePath($value)
    {
        $this->setProperty("ResourcePath", $value, true);
    }
    /**
     * Specifies 
     * the primary URI of this site 
     * collection, including the host name, port number, and path.
     * @return string
     */
    public function getPrimaryUri()
    {
        if (!$this->isPropertyAvailable("PrimaryUri")) {
            return null;
        }
        return $this->getProperty("PrimaryUri");
    }
    /**
     * Specifies 
     * the primary URI of this site 
     * collection, including the host name, port number, and path.
     * @var string
     */
    public function setPrimaryUri($value)
    {
        $this->setProperty("PrimaryUri", $value, true);
    }
    /**
     * Specifies 
     * whether the site collection is 
     * read-only and is unavailable for write access.<88>
     * @return bool
     */
    public function getReadOnly()
    {
        if (!$this->isPropertyAvailable("ReadOnly")) {
            return null;
        }
        return $this->getProperty("ReadOnly");
    }
    /**
     * Specifies 
     * whether the site collection is 
     * read-only and is unavailable for write access.<88>
     * @var bool
     */
    public function setReadOnly($value)
    {
        $this->setProperty("ReadOnly", $value, true);
    }
    /**
     * @return string
     */
    public function getRelatedGroupId()
    {
        if (!$this->isPropertyAvailable("RelatedGroupId")) {
            return null;
        }
        return $this->getProperty("RelatedGroupId");
    }
    /**
     * @var string
     */
    public function setRelatedGroupId($value)
    {
        $this->setProperty("RelatedGroupId", $value, true);
    }
    /**
     * Specifies 
     * the required minimum version of the designer that can be 
     * used on this site collection. The 
     * default, if not disabled on the Web application, is 
     * "15.0.0.0".
     * @return string
     */
    public function getRequiredDesignerVersion()
    {
        if (!$this->isPropertyAvailable("RequiredDesignerVersion")) {
            return null;
        }
        return $this->getProperty("RequiredDesignerVersion");
    }
    /**
     * Specifies 
     * the required minimum version of the designer that can be 
     * used on this site collection. The 
     * default, if not disabled on the Web application, is 
     * "15.0.0.0".
     * @var string
     */
    public function setRequiredDesignerVersion($value)
    {
        $this->setProperty("RequiredDesignerVersion", $value, true);
    }
    /**
     * Gets or 
     * sets the sandboxed code capability for the site collection. The default is set 
     * to Check.
     * @return integer
     */
    public function getSandboxedCodeActivationCapability()
    {
        if (!$this->isPropertyAvailable("SandboxedCodeActivationCapability")) {
            return null;
        }
        return $this->getProperty("SandboxedCodeActivationCapability");
    }
    /**
     * Gets or 
     * sets the sandboxed code capability for the site collection. The default is set 
     * to Check.
     * @var integer
     */
    public function setSandboxedCodeActivationCapability($value)
    {
        $this->setProperty("SandboxedCodeActivationCapability", $value, true);
    }
    /**
     * @return integer
     */
    public function getSearchBoxInNavBar()
    {
        if (!$this->isPropertyAvailable("SearchBoxInNavBar")) {
            return null;
        }
        return $this->getProperty("SearchBoxInNavBar");
    }
    /**
     * @var integer
     */
    public function setSearchBoxInNavBar($value)
    {
        $this->setProperty("SearchBoxInNavBar", $value, true);
    }
    /**
     * @return string
     */
    public function getSearchBoxPlaceholderText()
    {
        if (!$this->isPropertyAvailable("SearchBoxPlaceholderText")) {
            return null;
        }
        return $this->getProperty("SearchBoxPlaceholderText");
    }
    /**
     * @var string
     */
    public function setSearchBoxPlaceholderText($value)
    {
        $this->setProperty("SearchBoxPlaceholderText", $value, true);
    }
    public function getServerRelativePath()
    {
        if (!$this->isPropertyAvailable("ServerRelativePath")) {
            return null;
        }
        return $this->getProperty("ServerRelativePath");
    }
    public function setServerRelativePath($value)
    {
        $this->setProperty("ServerRelativePath", $value, true);
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the top-level site in 
     * the site 
     * collection.This 
     * property MUST begin with a forward slash ("/").
     * @return string
     */
    public function getServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("ServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("ServerRelativeUrl");
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the top-level site in 
     * the site 
     * collection.This 
     * property MUST begin with a forward slash ("/").
     * @var string
     */
    public function setServerRelativeUrl($value)
    {
        $this->setProperty("ServerRelativeUrl", $value, true);
    }
    /**
     * When true, 
     * users will be able to grant permissions to guests for resources within the site 
     * collection.
     * @return bool
     */
    public function getShareByEmailEnabled()
    {
        if (!$this->isPropertyAvailable("ShareByEmailEnabled")) {
            return null;
        }
        return $this->getProperty("ShareByEmailEnabled");
    }
    /**
     * When true, 
     * users will be able to grant permissions to guests for resources within the site 
     * collection.
     * @var bool
     */
    public function setShareByEmailEnabled($value)
    {
        $this->setProperty("ShareByEmailEnabled", $value, true);
    }
    /**
     * Specifies 
     * whether the user will be able to share links to the documents that can be 
     * accessed without signing in.
     * @return bool
     */
    public function getShareByLinkEnabled()
    {
        if (!$this->isPropertyAvailable("ShareByLinkEnabled")) {
            return null;
        }
        return $this->getProperty("ShareByLinkEnabled");
    }
    /**
     * Specifies 
     * whether the user will be able to share links to the documents that can be 
     * accessed without signing in.
     * @var bool
     */
    public function setShareByLinkEnabled($value)
    {
        $this->setProperty("ShareByLinkEnabled", $value, true);
    }
    /**
     * Represents 
     * the option to search for existing guest users via the people picker.
     * @return bool
     */
    public function getShowPeoplePickerSuggestionsForGuestUsers()
    {
        if (!$this->isPropertyAvailable("ShowPeoplePickerSuggestionsForGuestUsers")) {
            return null;
        }
        return $this->getProperty("ShowPeoplePickerSuggestionsForGuestUsers");
    }
    /**
     * Represents 
     * the option to search for existing guest users via the people picker.
     * @var bool
     */
    public function setShowPeoplePickerSuggestionsForGuestUsers($value)
    {
        $this->setProperty("ShowPeoplePickerSuggestionsForGuestUsers", $value, true);
    }
    /**
     * Specifies 
     * whether the URL structure of 
     * this site 
     * collection is viewable. See Microsoft.SharePoint.Client.Web.ShowURLStructureForCurrentUser, 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "false".
     * @return bool
     */
    public function getShowUrlStructure()
    {
        if (!$this->isPropertyAvailable("ShowUrlStructure")) {
            return null;
        }
        return $this->getProperty("ShowUrlStructure");
    }
    /**
     * Specifies 
     * whether the URL structure of 
     * this site 
     * collection is viewable. See Microsoft.SharePoint.Client.Web.ShowURLStructureForCurrentUser, 
     * which is the scalar property used to determine the behavior for the current 
     * user. The default, if not disabled on the Web application, is 
     * "false".
     * @var bool
     */
    public function setShowUrlStructure($value)
    {
        $this->setProperty("ShowUrlStructure", $value, true);
    }
    /**
     * @return bool
     */
    public function getSocialBarOnSitePagesDisabled()
    {
        if (!$this->isPropertyAvailable("SocialBarOnSitePagesDisabled")) {
            return null;
        }
        return $this->getProperty("SocialBarOnSitePagesDisabled");
    }
    /**
     * @var bool
     */
    public function setSocialBarOnSitePagesDisabled($value)
    {
        $this->setProperty("SocialBarOnSitePagesDisabled", $value, true);
    }
    /**
     * Gets or 
     * sets the status bar message link target for this site.
     * @return string
     */
    public function getStatusBarLink()
    {
        if (!$this->isPropertyAvailable("StatusBarLink")) {
            return null;
        }
        return $this->getProperty("StatusBarLink");
    }
    /**
     * Gets or 
     * sets the status bar message link target for this site.
     * @var string
     */
    public function setStatusBarLink($value)
    {
        $this->setProperty("StatusBarLink", $value, true);
    }
    /**
     * Gets or 
     * sets the status bar message text for this site.
     * @return string
     */
    public function getStatusBarText()
    {
        if (!$this->isPropertyAvailable("StatusBarText")) {
            return null;
        }
        return $this->getProperty("StatusBarText");
    }
    /**
     * Gets or 
     * sets the status bar message text for this site.
     * @var string
     */
    public function setStatusBarText($value)
    {
        $this->setProperty("StatusBarText", $value, true);
    }
    /**
     * Gets a 
     * Boolean value to see if support for html thicket files is enabled or disabled.
     * @return bool
     */
    public function getThicketSupportDisabled()
    {
        if (!$this->isPropertyAvailable("ThicketSupportDisabled")) {
            return null;
        }
        return $this->getProperty("ThicketSupportDisabled");
    }
    /**
     * Gets a 
     * Boolean value to see if support for html thicket files is enabled or disabled.
     * @var bool
     */
    public function setThicketSupportDisabled($value)
    {
        $this->setProperty("ThicketSupportDisabled", $value, true);
    }
    /**
     * When this 
     * flag is set for the site, the audit events are trimmed periodically. 
     * @return bool
     */
    public function getTrimAuditLog()
    {
        if (!$this->isPropertyAvailable("TrimAuditLog")) {
            return null;
        }
        return $this->getProperty("TrimAuditLog");
    }
    /**
     * When this 
     * flag is set for the site, the audit events are trimmed periodically. 
     * @var bool
     */
    public function setTrimAuditLog($value)
    {
        $this->setProperty("TrimAuditLog", $value, true);
    }
    /**
     * Specifies 
     * whether the visual upgrade UI 
     * for this site collection is 
     * displayed.
     * @return bool
     */
    public function getUIVersionConfigurationEnabled()
    {
        if (!$this->isPropertyAvailable("UIVersionConfigurationEnabled")) {
            return null;
        }
        return $this->getProperty("UIVersionConfigurationEnabled");
    }
    /**
     * Specifies 
     * whether the visual upgrade UI 
     * for this site collection is 
     * displayed.
     * @var bool
     */
    public function setUIVersionConfigurationEnabled($value)
    {
        $this->setProperty("UIVersionConfigurationEnabled", $value, true);
    }
    /**
     * Specifies 
     * the upgrade information of this site collection.
     * @return UpgradeInfo
     */
    public function getUpgradeInfo()
    {
        if (!$this->isPropertyAvailable("UpgradeInfo")) {
            return null;
        }
        return $this->getProperty("UpgradeInfo");
    }
    /**
     * Specifies 
     * the upgrade information of this site collection.
     * @var UpgradeInfo
     */
    public function setUpgradeInfo($value)
    {
        $this->setProperty("UpgradeInfo", $value, true);
    }
    /**
     * Specifies 
     * a date, after which site collection administrators 
     * will be reminded to upgrade the site collection.
     * @return string
     */
    public function getUpgradeReminderDate()
    {
        if (!$this->isPropertyAvailable("UpgradeReminderDate")) {
            return null;
        }
        return $this->getProperty("UpgradeReminderDate");
    }
    /**
     * Specifies 
     * a date, after which site collection administrators 
     * will be reminded to upgrade the site collection.
     * @var string
     */
    public function setUpgradeReminderDate($value)
    {
        $this->setProperty("UpgradeReminderDate", $value, true);
    }
    /**
     * Specifies 
     * whether the upgrade has been scheduled. It can only be set to false by a farm 
     * administrator. To set it to true, set the UpgradeScheduledDate (section 3.2.5.119.1.1.34) 
     * to a future time.
     * @return bool
     */
    public function getUpgradeScheduled()
    {
        if (!$this->isPropertyAvailable("UpgradeScheduled")) {
            return null;
        }
        return $this->getProperty("UpgradeScheduled");
    }
    /**
     * Specifies 
     * whether the upgrade has been scheduled. It can only be set to false by a farm 
     * administrator. To set it to true, set the UpgradeScheduledDate (section 3.2.5.119.1.1.34) 
     * to a future time.
     * @var bool
     */
    public function setUpgradeScheduled($value)
    {
        $this->setProperty("UpgradeScheduled", $value, true);
    }
    /**
     * Specifies 
     * the upgrade scheduled date in UTC (Coordinated Universal 
     * Time). Only the Date part is used. If UpgradeScheduled 
     * (section 3.2.5.119.1.1.33) 
     * is false, returns SqlDateTime.MinValue.
     * @return string
     */
    public function getUpgradeScheduledDate()
    {
        if (!$this->isPropertyAvailable("UpgradeScheduledDate")) {
            return null;
        }
        return $this->getProperty("UpgradeScheduledDate");
    }
    /**
     * Specifies 
     * the upgrade scheduled date in UTC (Coordinated Universal 
     * Time). Only the Date part is used. If UpgradeScheduled 
     * (section 3.2.5.119.1.1.33) 
     * is false, returns SqlDateTime.MinValue.
     * @var string
     */
    public function setUpgradeScheduledDate($value)
    {
        $this->setProperty("UpgradeScheduledDate", $value, true);
    }
    /**
     * Specifies 
     * whether the site collection is 
     * currently being upgraded.
     * @return bool
     */
    public function getUpgrading()
    {
        if (!$this->isPropertyAvailable("Upgrading")) {
            return null;
        }
        return $this->getProperty("Upgrading");
    }
    /**
     * Specifies 
     * whether the site collection is 
     * currently being upgraded.
     * @var bool
     */
    public function setUpgrading($value)
    {
        $this->setProperty("Upgrading", $value, true);
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the top-level site in 
     * the site 
     * collection.This 
     * property MUST begin with a forward slash ("/").
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the top-level site in 
     * the site 
     * collection.This 
     * property MUST begin with a forward slash ("/").
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * Specifies 
     * usage information about the site (2), including 
     * bandwidth, storage, and the number of visits to the site collection.
     * @return UsageInfo
     */
    public function getUsage()
    {
        if (!$this->isPropertyAvailable("Usage")) {
            return null;
        }
        return $this->getProperty("Usage");
    }
    /**
     * Specifies 
     * usage information about the site (2), including 
     * bandwidth, storage, and the number of visits to the site collection.
     * @var UsageInfo
     */
    public function setUsage($value)
    {
        $this->setProperty("Usage", $value, true);
    }
    /**
     * @return Group
     */
    public function getHubSiteSynchronizableVisitorGroup()
    {
        if (!$this->isPropertyAvailable("HubSiteSynchronizableVisitorGroup")) {
            $this->setProperty("HubSiteSynchronizableVisitorGroup", new Group($this->getContext(), new ResourcePath("HubSiteSynchronizableVisitorGroup", $this->getResourcePath())));
        }
        return $this->getProperty("HubSiteSynchronizableVisitorGroup");
    }
    /**
     * Specifies 
     * the owner of the site collection.<92>
     * @return User
     */
    public function getOwner()
    {
        if (!$this->isPropertyAvailable("Owner")) {
            $this->setProperty("Owner", new User($this->getContext(), new ResourcePath("Owner", $this->getResourcePath())));
        }
        return $this->getProperty("Owner");
    }
    /**
     * Gets or 
     * sets the secondary contact that is used for the site collection. The user that 
     * is specified by the SecondaryContact property SHOULD NOT be identical to 
     * the user that is specified by the Owner (section 3.2.5.119.1.2.5) 
     * property.
     * @return User
     */
    public function getSecondaryContact()
    {
        if (!$this->isPropertyAvailable("SecondaryContact")) {
            $this->setProperty("SecondaryContact", new User($this->getContext(), new ResourcePath("SecondaryContact", $this->getResourcePath())));
        }
        return $this->getProperty("SecondaryContact");
    }
    /**
     * Gets or 
     * sets the number of days of audit log data to retain. If unset and audit 
     * trimming is enabled, the retention defaults to one schedule window of the 
     * administrator-configured schedule for trimming.
     * @return Audit
     */
    public function getAudit()
    {
        if (!$this->isPropertyAvailable("Audit")) {
            $this->setProperty("Audit", new Audit($this->getContext(), new ResourcePath("Audit", $this->getResourcePath())));
        }
        return $this->getProperty("Audit");
    }
    /**
     * Specifies 
     * the collection of Recycle Bin items 
     * for the site collection.
     * @return RecycleBinItemCollection
     */
    public function getRecycleBin()
    {
        if (!$this->isPropertyAvailable("RecycleBin")) {
            $this->setProperty("RecycleBin", new RecycleBinItemCollection($this->getContext(), new ResourcePath("RecycleBin", $this->getResourcePath())));
        }
        return $this->getProperty("RecycleBin");
    }
    /**
     * @return SensitivityLabelInfo
     */
    public function getSensitivityLabelInfo()
    {
        if (!$this->isPropertyAvailable("SensitivityLabelInfo")) {
            return null;
        }
        return $this->getProperty("SensitivityLabelInfo");
    }
    /**
     * @var SensitivityLabelInfo
     */
    public function setSensitivityLabelInfo($value)
    {
        $this->setProperty("SensitivityLabelInfo", $value, true);
    }
}