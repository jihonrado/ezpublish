{*?template charset=utf8?*}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="no" lang="no">

<head>
    <link rel="stylesheet" type="text/css" href={"stylesheets/core.css"|ezdesign} />
    <link rel="stylesheet" type="text/css" href={"stylesheets/forum.css"|ezdesign} />

{include uri="design:page_head.tpl" enable_glossary=false() enable_help=false()}

</head>

<body>

<img src={"topmenu.gif"|ezimage} alt="" border="0" usemap="#map" />

<map name="map">
<area shape="rect" coords="1,1,71,25" href={"content/view/full/26/"|ezurl}>
<area shape="rect" coords="73,0,156,24" href={"content/view/full/159/"|ezurl}>
<area shape="rect" coords="157,0,228,23" href={"content/view/full/62/"|ezurl}>
<area shape="rect" coords="229,0,299,24" href={"content/view/full/200/"|ezurl}>
<area shape="rect" coords="300,0,372,24" href={"content/view/full/32/"|ezurl}>
<area shape="rect" coords="374,1,448,24" href={"content/view/full/211/"|ezurl}>
<area shape="rect" coords="450,1,523,24" href={"content/view/full/82/"|ezurl}>
</map>

<table class="mainlayout" width="700" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td><a href={"content/view/full/32/"|ezurl}><img src={"images/crossroads_logo.gif"|ezdesign} alt="Forum fora" border="0" /></a></td>
</tr>
<tr>
    <td>

    <table class="topmenu" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="menuitem" width="25%">
	    <a href={"content/view/full/32/"|ezurl}>home</a>
	    </td>
        <td class="menuitem" width="25%">
	    <a href={"content/view/full/192/"|ezurl}>links</a>
    	</td>
        <td class="menuitem" width="25%">
	    <a href={"content/view/full/198/"|ezurl}>about</a>
	    </td>
        <td class="menuitem" width="25%">
	    <a href={"user/login/"|ezurl}>login</a>
    	</td>
    </tr> 	
    </table>

    </td>    
</tr>
<tr>
    <td class="path">
       &gt;
       {section name=Path loop=$module_result.path offset=2}
        {section show=$Path:item.url}
        <a href={$Path:item.url|ezurl}>{$Path:item.text}</a>
        {section-else}
        {$Path:item.text}
        {/section}

        {delimiter}
        /
        {/delimiter}
        {/section}
	    </td>
    </tr> 	
    <tr>
        <td class="maincontent">
        {$module_result.content}
	    </td>
    </tr>
    <tr>
        <td>
    
    <div class="credits">
    <a href="http://developer.ez.no"><img src={"powered-by-ezpublish-100x35-trans-lgrey.gif"|ezimage} alt="eZ publish" border="0" width="100" height="35" /></a>
    <p>Copyright &copy; <a href="http://ez.no">eZ systems as</a> 1999-2003</p>
    </div>

    </td>    
</tr>
</table>

</body>
</html>
