<?php

namespace Office365\SharePoint;
use Office365\OutlookServices\OutlookEntity;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;


class ClientObjectTemplate extends OutlookEntity
{

    public function getObjectProperty()
    {
        if(!$this->isPropertyAvailable("{name}")){
            $this->setProperty("{name}", new ClientObject($this->getContext(),
                new ResourcePath("{name}",$this->getResourcePath())));
        }
        return $this->getProperty("{name}");
    }

    public function getValueProperty()
    {
        if(!$this->isPropertyAvailable("{name}")){
            return null;
        }
        return $this->getProperty("{name}");
    }

    public function setValueProperty($value)
    {
        $this->setProperty("{name}",$value,true);
    }



}
