<?php
    $Query = "SELECT * FROM site_seo WHERE status = 1";
    $Result = $Conn->query($Query);
    foreach ($Result as $DataV) 
    {
        $SeoTitle  = $DataV['title'];
        $SeoDesc   = $DataV['description'];
        $SeoKeyw   = $DataV['keywords'];
        $SeoOwner  = $DataV['owner'];
    }


    $Query = "SELECT * FROM sitedetails WHERE status = 1";
    
    $Result = $Conn->query($Query);
    
    foreach ($Result as $DataV) 
    {
        $Logo     = $DataV['logo'];
        $Logo1    = $DataV['logo1'];
        $Favicon  = $DataV['favicon'];
        $SiteN    = $DataV['sitename'];
        $Email    = $DataV['email'];
        $Contact  = $DataV['phone'];
        $Contact1 = $DataV['phone1'];
        $AddrB    = $DataV['address'];
        $About    = $DataV['about'];
        $TimeB    = $DataV['timing'];
        $FackB    = $DataV['link2'];
        $TwitB    = $DataV['link1'];
        $InstB    = $DataV['link3'];
        $Whatsapp = $DataV['link4'];
        $LocAPI   = $DataV['api'];
        $Footertime = $DataV['timing_detail'];
    }

?>