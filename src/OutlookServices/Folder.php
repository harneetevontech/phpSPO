<?php

/**
 * Updated By PHP Office365 Generator 2020-04-25T20:43:59+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

use Office365\OutlookServices\OutlookEntity;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class Folder extends OutlookEntity
{
    /**
     * @var string
     */
    public $DisplayName;
    /**
     * @var string
     */
    public $ParentFolderId;
    /**
     * @var integer
     */
    public $ChildFolderCount;
    /**
     * @var integer
     */
    public $UnreadItemCount;
    /**
     * @var integer
     */
    public $TotalItemCount;
    /**
     * @var integer
     */
    public $SizeInBytes;
    /**
     * @return MessageCollection
     */
    public function getMessages()
    {
        if (!$this->isPropertyAvailable("Messages")) {
            $this->setProperty("Messages", new MessageCollection($this->getContext(), new ResourcePath("Messages", $this->getResourcePath())));
        }
        return $this->getProperty("Messages");
    }
    /**
     * @return FolderCollection
     */
    public function getChildFolders()
    {
        if (!$this->isPropertyAvailable("ChildFolders")) {
            $this->setProperty("ChildFolders", new FolderCollection($this->getContext(), new ResourcePath("ChildFolders", $this->getResourcePath())));
        }
        return $this->getProperty("ChildFolders");
    }
}