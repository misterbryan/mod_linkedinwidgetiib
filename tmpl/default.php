<?php
// No direct access
defined('_JEXEC') or die;

/**
 * Retrieve configuration parameters
 * */
$share_show_on_site = $params->get("share_show_on_site", "");
$mprofile_show_on_site = $params->get("mprofile_show_on_site", "");
$jobs_show_on_site = $params->get("jobs_show_on_site", "");
?>

<?php
// ---------------------------------------- SHARE ----------------------------------------  
if ($share_show_on_site == "yes") {
    //Retrieve parameters
    $share_url = $params->get("share_url", "");
    $share_language = $params->get("share_language", "");
    $share_count_mode = $params->get("share_count_mode", "");
    if ($share_url != "") {
        $share_url_iib = "";
    } else {
        $share_url_iib = 'data-url="' . $share_url . '" ';
    }
    if ($share_count_mode == "no_count") {
        $share_count_mode_iib = "";
    } else {
        $share_count_mode_iib = 'data-counter="' . $share_count_mode . '" ';
    }
    ?>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: <?php echo $share_language; ?></script>
    <script type="IN/Share" <?php echo $share_url_iib; ?> <?php echo $share_count_mode_iib; ?>></script>
    <?php
}

// ---------------------------------------- MEMBER PROFILE ----------------------------------------  
if ($mprofile_show_on_site == "yes") {
    //Retrieve parameters
    $mprofile_url = $params->get("mprofile_url", "");
    $mprofile_display_mode = $params->get("mprofile_display_mode", "");
    $mprofile_show_connections = $params->get("mprofile_show_connections", "");
    $mprofile_behavior = $params->get("mprofile_behavior", "");

    if ($mprofile_url == "") {
        $mprofile_url_iib = 'data-id="http://www.linkedin.com/in/jeffweiner08" ';
    } else {
        $mprofile_url_iib = 'data-id="' . $mprofile_url . '" ';
    }
    if ($mprofile_show_connections == "show") {
        $mprofile_show_connections_iib = "";
    } else {
        $mprofile_show_connections_iib = 'data-related="false" ';
    }
    if ($mprofile_display_mode == "inline") {
        $mprofile_display_mode_iib = 'data-format="inline" ';
    } else {
        if ($mprofile_behavior == "on_hover") {
            $mprofile_display_mode_iib = 'data-format="hover" ';
        } else {
            $mprofile_display_mode_iib = 'data-format="click" ';
        }
    }
    ?>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    <script type="IN/MemberProfile" <?php echo $mprofile_url_iib; ?> <?php echo $mprofile_display_mode_iib; ?> <?php echo $mprofile_show_connections_iib; ?>></script>
    <?php
}

// ---------------------------------------- JOBS ----------------------------------------  
if ($jobs_show_on_site == "yes") {
    ?>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    <script type="IN/JYMBII" data-format="inline"></script>
    <?php
}