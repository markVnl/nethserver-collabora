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
         $host = explode(':',$_SERVER['HTTP_HOST']);
         return array(
            'url' => "https://".$host[0]."/loleaflet/dist/admin/admin.html"
         );
    }
}
