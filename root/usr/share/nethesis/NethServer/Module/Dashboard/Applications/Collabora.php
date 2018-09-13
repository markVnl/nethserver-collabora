<?php
namespace NethServer\Module\Dashboard\Applications;

class Collabora extends \Nethgui\Module\AbstractModule implements \NethServer\Module\Dashboard\Interfaces\ApplicationInterface
{

    public function getName()
    {
        return "Collabora Admin";
    }

    public function getInfo()
    {
         $hostname = $this->getPlatform()->getDatabase('configuration')->getType('SystemName');
         $domain = $this->getPlatform()->getDatabase('configuration')->getType('DomainName');
         return array(
            'url' => "https://$hostname.$domain/loleaflet/dist/admin/admin.html"
         );
    }
}
