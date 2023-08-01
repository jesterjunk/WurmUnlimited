<!DOCTYPE HTML>
<html lang="en" style="background: hsl(70, 8%, 15%); overflow-y: scroll;">
<head>
    <meta charset="UTF-8">
    <title>Wurm Unlimited Server Mods</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

    :root {
        --main-color: #EBEBE8;
        --main-font: Arial, Helvetica, sans-serif;
        --main-monospace-font-00: 'IBM Plex Mono', monospace;

        --color-00: hsl(70, 8%, 15%);
        --color-01: hsl(50, 12%, 20%);
        --color-01-selected: hsl(48, 12%, 16%);
        --color-02: silver;
        --color-03: hsl(50, 11%, 41%);  /* used for github corner fill and scrollbar thumb  */

        --header-background-color: hsl(72, 9%, 11%);  /* used for scrollbar track  */
        --header-title-link-text: #D1CFC9;  /* used for github corner fill and scrollbar thumb  */

        --virustotal-background-color: hsl(72, 8%, 12%);

        --table-header-text-color: #BAB8AE;

        --table-header-spacing-adjustment: 21px;
        --table-row-spacing-adjustment: 22px;

        --color-scroll-wall-border-bottom: hsl(80, 8%, 8%);
    }

    html {
/*        scroll-behavior: smooth;*/
        scroll-padding: calc(50% + (210px / 5.25));

/*                            This is for                                      */
/*                              FireFox                                        */
/*                       thumb           track                                 */
        scrollbar-color: #74705d         #1E1F1A;
        scrollbar-width: thin;  /* options: auto (this is default), thin, none */
    }

    body::-webkit-scrollbar {
        width: .5em;
    }

    body::-webkit-scrollbar-track {
        background-color: var(--header-background-color);
    }

    body::-webkit-scrollbar-thumb {
        background-color: var(--color-03);
    }

    body {
        margin: 0;
        min-width: 818px;
        color: var(--main-color);
        font-family: var(--main-font);
    }

    /*  URLS  */
    a:link,
    a:visited {color: hsl(190, 81%, 67%); text-decoration: none; outline: none;}
    a:hover {color: hsl(80, 76%, 53%);}
    a:active {color: hsl(40, 93%, 51%);}
    /*  URLS  */

    .text_center {
        text-align: center;
    }
    .text_right {
        text-align: right;
    }

    div.scroll_wall {
        z-index: 998;
        position: fixed;
        width: 100%;
        top: 0;
        height: calc(180px + 32px);
        background-color: var(--header-background-color);
        filter: drop-shadow(0 11px 11px hsla(0, 0%, 0%, .84));
    }




    div.header_container {
        z-index: 1000;
        position: fixed;
        top: 0;
        width: 100%;
    }
    div.header_information {
/*        block-size: fit-content;*/
        height: calc(118px + 22px);
    }
    div.header_information div.disclaimer {
        position: absolute;
        top: 0;
        left: 0;
        font-size: .84em;
        line-height: 1.2em;
    }
    div.header_information div.disclaimer div.disclaimer_header {
        position: relative;
        width: 100%;
        margin: 0 auto;
        font-weight: 600;
        font-size: 1.2em !important;
        padding-top: 6px;
        padding-bottom: 8px;
        padding-right: 8px;
        right: 8px;
        color: hsla(0, 100%, 50%, .88);
        background-color: hsla(0, 0%, 0%, .42);
        font-family: Verdana, Geneva, sans-serif;
    }
    div.header_information div.disclaimer div.disclaimer_message {
        background-color: hsla(0, 0%, 0%, .42);
        font-family: Verdana, Geneva, sans-serif;
        padding-bottom:  4px;
        padding-left: 48px;
        padding-right: 8px;
    }
    div.header_information div.disclaimer div.spacer {
        height: 6px;
    }
/*    div.header_information div.disclaimer .div_copy_to_clipboard_message {
        left: calc(80px + 40px + 8px);
        padding-top: 8px;
        padding-bottom: 6px;
        padding-left: 20px;
        padding-right: 6px;
        color: #FFFF7FEE;
        letter-spacing: .1em;
        line-height: 1.3em;
        text-shadow: 0 0 2px #000,
                     0 0 4px #000,
                     0 0 6px #000;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 1em;
    }*/

    div.header_information div.disclaimer div.github-corner a {
        z-index: 2024;
        position: absolute;
        top: 0;
        border: 0;
        left: 0;
        display: block;
        width: 353px;
        height: 111px;
    }
    div.header_information div.disclaimer div.github-corner a svg {
        fill: var(--color-03);
        color: var(--header-background-color);
        transform: scale(-1, 1)
    }
    div.header_information div.disclaimer div.github-corner a:hover .octo-arm {
        animation: octocat-wave 560ms ease-in-out
    }
    div.header_information div.disclaimer div.github-corner a:hover .octo-arm @keyframes octocat-wave {
        0%, 100% { transform: rotate(0)      }
        20%, 60% { transform: rotate(-25deg) }
        40%, 80% { transform: rotate(10deg)  }
    }

    div.header_information div.stats {
        padding-left: 11px;
        padding-right: 22px;
        padding-top: 11px;
        padding-bottom: 11px;
        float: right;
        color: var(--color-02);
        font-family: var(--main-monospace-font-00);
        font-size: .95em;
        font-weight: 500;
        white-space: pre;
        line-height: 1.05em;
        letter-spacing: .01em;
    }
    div.header_information div.stats span.counter {
        font-weight: 600;
    }
    div.header_information div.stats span.pipe {
        position: relative;
        top: 2px;
        font-size: 1.5em;
        line-height: 0;
        font-weight: 600;
        color: var(--color-03);
    }
    div.header_information div.stats hr {
        border: 0;
        height: 0;
    }
    div.header_information div.stats hr.hr_00 {
        margin: 11px 0;
        margin-bottom: -8px;
    }
    div.header_information div.stats hr.hr_01 {
        margin: 9px 0;
        margin-bottom: -14px;
    }
    div.header_information div.stats hr.hr_02 {
        margin: 5px 0;
        margin-bottom: -14px;
    }
    div.header_information a#h3_header_title_link {
/*        display: block;*/
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
        top: 0;
        left: 350px;
        min-width: 104px;
        width: calc(100% - 683px - 37px);
        height: 210px;
        -webkit-transition: text-decoration 1000ms ease-in-out;
           -moz-transition: text-decoration 1000ms ease-in-out;
                transition: text-decoration 1000ms ease-in-out;
/*        border: 1px solid rebeccapurple;*/
    }
    div.header_information a#h3_header_title_link h3 {
/*        flex: 1;*/
        color: var(--header-title-link-text);
        margin: 0;
        font-family: Verdana, Geneva, sans-serif;
/*        line-height: calc(160px);*/
/*        border: 1px solid rebeccapurple;*/
    }
    div.header_information a#h3_header_title_link:hover {
        color: var(--header-title-link-text);
        text-decoration: underline;
    }


    div.header_information div.Ko-fi {
        z-index: 2023;
        display: flex;
/*        display: none;*/
        position: fixed;
        justify-content: center;
        align-items: center;
        top: 0;
        right: calc(148px + 24px);
        height: 210px;
        width: calc(148px + 42px + 4px);
    }
    div.header_information div.Ko-fi a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 84px;
        height: 42px;
        background-color: hsla(0, 0%, 0%);
        border-radius: 11px;
        -webkit-transition: 1000ms ease-in-out;
           -moz-transition: 1000ms ease-in-out;
                transition: 1000ms ease-in-out;
    }
    div.header_information div.Ko-fi a:hover {
        background-color: hsla(0, 0%, 0%);
        filter: drop-shadow(0 0 8px hsla(0, 0%, 100%));
    }
    div.header_information div.Ko-fi a:active {
        background-color: hsla(0, 0%, 0%);
        filter: drop-shadow(0 0 8px #00B9FE);
        -webkit-transition: 250ms ease-in;
           -moz-transition: 250ms ease-in;
                transition: 250ms ease-in;
    }
    div.header_information div.Ko-fi a:active svg .cls-5 {
        fill: #00B9FE;
    }
    div.header_information div.Ko-fi a svg {
        width:  calc(84px - 8px);
        height: calc(42px - 8px);
    }
    div.header_information div.Ko-fi a svg .cls-1 {
        fill: #00b9fe;
    }

    div.header_information div.Ko-fi a svg .cls-2 {
        fill: #fff;
        stroke: #000;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 1.14px;
    }

    div.header_information div.Ko-fi a svg .cls-3 {
        fill: #ff5e5b;
    }

    div.header_information div.Ko-fi a svg .cls-4 {
        fill: url(#linear-gradient);
    }

    div.header_information div.Ko-fi a svg .cls-5 {
        fill: #FFF;
    }

    table#mods_table {
        max-width: 1500px;
        top: 400px;
        margin: 0 auto 0;
        width: calc(100% - var(--table-row-spacing-adjustment) * 2);
        border-spacing: 0 var(--table-row-spacing-adjustment);
    }
    table#mods_table thead tr th {
        z-index: 999;
        position: -webkit-sticky;
        position: sticky;
        top: var(--table-row-spacing-adjustment);
        height:        calc(180px + var(--table-header-spacing-adjustment) - var(--table-row-spacing-adjustment));
        padding-bottom: calc(22px - var(--table-header-spacing-adjustment));
        vertical-align: bottom;
        color: var(--table-header-text-color);
    }
    table#mods_table thead tr th.direct_download {
        padding-left: 0;
        padding-right: 0;
    }
    table#mods_table tbody tr td.forum_wiki {
        white-space: nowrap !important;
    }
    table#mods_table tbody tr td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    table#mods_table tbody tr td:not(:first-child) {
        border-left:  1px solid var(--color-00);
    }
    table#mods_table tbody tr td:last-of-type {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    table#mods_table tbody tr td:not(:last-of-type) {
        border-right:  1px solid var(--color-00);
    }
    table#mods_table tbody tr {
        filter: drop-shadow(0 0 3px #000);
        -webkit-transition: 200ms ease-in-out;
           -moz-transition: 200ms ease-in-out;
                transition: 200ms ease-in-out;
    }
    table#mods_table tbody tr:hover {
        filter: drop-shadow(0 0 8px #000)
                drop-shadow(0 0 8px #000);
    }
    table#mods_table tbody tr.selected {
        position: relative;
/*        z-index: 996;*/
        filter: drop-shadow(0 0 24px #000)
                drop-shadow(0 0 24px #000);
    }
    table#mods_table tbody tr td {
        padding-top: 6px;
        padding-bottom: 6px;
        background-color: var(--color-01);
    }
    table#mods_table tbody tr td.mod_num,
    table#mods_table tbody tr td.author,
    table#mods_table tbody tr td.current_version,
    table#mods_table tbody tr td.version_details {
        padding-left:  8px;
        padding-right: 8px;
    }
    table#mods_table tbody tr td.mod_name_and_description {
/*        vertical-align: top;*/
        height: 1px;
    }
    table#mods_table tbody tr td.mod_name_and_description div {
        display: flex;
        height: 100%;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-items: flex-start;
        align-content: center;
/*        border: 1px solid rebeccapurple;*/
    }
    table#mods_table tbody tr td.mod_name_and_description div div.name,
    table#mods_table tbody tr td.mod_name_and_description div div.description {
        position: relative;
/*        min-width: 240px;*/
/*        border: 1px solid rebeccapurple;*/
        padding-left:  16px;
        padding-right: 16px;
    }
    table#mods_table tbody tr td.mod_name_and_description div div.name {
        position: relative;
        display: unset;
        flex: 1;
        font-size: 1em;
        line-height: 1.25em;
        font-weight: 700;
        padding-top: 6px;
        padding-bottom: 12px;
/*        text-align: center;*/
        width: 100%;
    }
    table#mods_table tbody tr td.mod_name_and_description div div.name div.anchor_link_icon {
        position: absolute;
        top: calc(-6px + 6px);
        right: calc(8px + 24px + 6px);
/*        border: 1px solid rebeccapurple;*/
    }
    table#mods_table tbody tr td.mod_name_and_description div div.name div.anchor_link_icon a {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: -1px;
        padding: 4px;
        width: 28px;
        background-color: var(--virustotal-background-color);
        height: 28px;
        border-radius: 4px;
        opacity: .84;
    }
    table#mods_table tbody tr td.mod_name_and_description div div.name div.anchor_link_icon a svg {
        width: 22px;
        height: 22px;
    }
    table#mods_table tbody tr td.mod_name_and_description div div.name div.anchor_link_icon a svg path {
        fill: currentColor;
    }
    table#mods_table tbody tr td.mod_name_and_description div div.description {
        display: unset;
        padding-top: 6px;
    }


    table#mods_table tbody tr td.version_details {
        font-family: var(--main-monospace-font-00);
        white-space: pre;
        font-size: .75em;
    }

    table#mods_table tbody tr td.version_details div.sha256 {
        position: relative;
        bottom: -11px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    table#mods_table tbody tr td.version_details div.sha256_label {
        flex: 4;
    }
    table#mods_table tbody tr td.version_details div.sha256_hash {
        flex: 19;
    }
    table#mods_table tbody tr td.version_details div.sha256_hash textarea {
        margin-bottom: -3px;
        overflow: hidden;
        color: var(--color-02);
        border: none;
        background: none;
        outline: none;
        resize: none;
    }

    table#mods_table tbody tr td.forum_wiki hr,
    table#mods_table tbody tr td.github hr,
    table#mods_table tbody tr td.direct_download hr {
        margin: 6px 0;
        border: 0;
        height: 2px;
        background-color: var(--color-00);
    }
    table#mods_table thead tr th.forum_wiki a,
    table#mods_table tbody tr td.forum_wiki a,
    table#mods_table tbody tr td.github a,
    table#mods_table thead tr th.github a {
        padding-left:  11px;
        padding-right: 11px;
    }
    span.span_color_00 {
        color: gray;
    }
    span.aka {
        display: block;
        padding-top:    4px;
        padding-bottom: 4px;
        font-size: .8em;
        color: var(--color-02);
    }
    span.span_triple_dot {
        position: relative;
        left: 3px;
        bottom: 2px;
        font-weight: bold;
        color: var(--color-02);
        letter-spacing: .1em;
    }




    div.virustotal {
        position: relative;
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: space-around;
        margin-left: 4px;
        margin-right: 4px;
    }
    div.virustotal a {
        display: flex;
        align-items: center;
        justify-content: space-around;
        min-width: 100px;
        width: 100%;
        background-color: var(--virustotal-background-color);
        height: 28px;
        border-radius: 4px;
        opacity: .84;
    }
    </style>
</head>
<body>


<?php


function human_file_size($size, $unit = "") {

    if( (! $unit && $size >= 1 << 30) || $unit == " GB") { return number_format($size / (1 << 30), 2) . " GB"; }
    if( (! $unit && $size >= 1 << 20) || $unit == " MB") { return number_format($size / (1 << 20), 2) . " MB"; }
    if( (! $unit && $size >= 1 << 10) || $unit == " KB") { return number_format($size / (1 << 10), 2) . " KB"; }
                                                           return number_format($size)                . " bytes";
}


function build_url_v00($url, $text) {

    return <<<HTML
                <a href="{$url}" title="{$url}" target="_blank">$text</a>\n
HTML;
}


function forum_wiki_urls($server_mod) {

    $forum_1_main    = $server_mod->forum_1->main;
    // $forum_1_archive = $server_mod->forum_1->archive;
    $forum_2_main    = $server_mod->forum_2->main;
    // $forum_2_archive = $server_mod->forum_2->archive;
    $wiki_main       = $server_mod->wiki->main;
    // $wiki_archive    = $server_mod->wiki->archive;

    $forum_wiki_urls = "";

    if ($forum_1_main)    { $forum_wiki_urls .= build_url_v00($forum_1_main,    "forum 1"); }
    // if ($forum_1_archive) { $forum_wiki_urls .= build_url_v00($forum_1_archive, "f1 arc"); }
    if ($forum_2_main)    { $forum_wiki_urls .= build_url_v00($forum_2_main,    "forum 2"); }
    // if ($forum_2_archive) { $forum_wiki_urls .= build_url_v00($forum_2_archive, "f2 arc"); }
    if ($wiki_main)       { $forum_wiki_urls .= build_url_v00($wiki_main,       "wiki"); }
    // if ($wiki_archive)    { $forum_wiki_urls .= build_url_v00($wiki_archive,    "wiki arc"); }

    return "\n                " . str_replace("\n", "<br><hr>\n", trim($forum_wiki_urls)) . "\n            ";
}


function github_urls($server_mod) {

    $github_releases  = $server_mod->github_releases;

    $github_urls = "";

    if ($github_releases) {

        $readme = preg_replace("/releases$/", "#readme", $github_releases);

        $github_urls .= build_url_v00($readme,  "readme");

        $github_urls .= build_url_v00($github_releases, "releases");
    }

    return "\n                " . str_replace("\n", "<br><hr>\n", trim($github_urls)) . "\n            ";
}


function direct_download_urls($server_mod) {

    $main       = $server_mod->direct_download->main;
    $mirror     = $server_mod->direct_download->mirror;
    $archive    = $server_mod->direct_download->archive;
    $virustotal = $server_mod->direct_download->virustotal;

    $direct_download_urls = "";

    if ($main)       { $direct_download_urls .= build_url_v00($main,    "main"); }
    if ($mirror)     { $direct_download_urls .= build_url_v00($mirror,  "mirror"); }
    if ($archive)    { $direct_download_urls .= build_url_v00($archive, "archive"); }
    if ($virustotal) { $direct_download_urls .= <<<HTML
                <div class="virustotal"><a class="virustotal" href="{$virustotal}" title="{$virustotal}" target="_blank">
                    <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 100 89"><path fill-rule="evenodd" d="M45.292 44.5 0 89h100V0H0l45.292 44.5zM90 80H22l35.987-35.2L22 9h68v71z"></path></svg>
                    <div>virustotal</div>
                </a></div>\n
HTML;
    }

    return "\n                " . str_replace("\n", "<br><hr>\n", trim($direct_download_urls)) . "\n            ";
}


$filename = "mods_server_simple_names_master_list_stage_01.txt";

$text = file_get_contents("mods_server_simple_names_master_list_stage_01.txt");

preg_match_all("/^•·⸱⸳.•\n([^⸱]+)\n•·⸱⸳.•/im", $text, $text_matches);

$json_sections = $text_matches[1];

$json = "[\n";

foreach ($json_sections as $json_section_num => $json_section) {

    $json .= $json_section . "\n";
}

$json .= "]";


$server_mods = json_decode($json);

$server_mods_count = count($server_mods);
$server_mods_count = strlen("$server_mods_count");


$rows = "";

$counter = 0;

$total_size = 0;

foreach ($server_mods as $server_mod_num => $server_mod) {

    $mod_name = $server_mod->mod_name;

    if ($mod_name) {

        $counter++;

        $anchor_slug          = $server_mod->slug;

        $mod_num_padded       = sprintf("%0{$server_mods_count}d", $counter);

        $author               = preg_replace("/\saka\s/", "<span class='aka'>aka</span>", $server_mod->author);

        $forum_wiki_urls      = forum_wiki_urls($server_mod);

        $github_urls          = github_urls($server_mod);

        $direct_download_urls = direct_download_urls($server_mod);

        $bytes                = $server_mod->direct_download->bytes;

        $total_size          += $bytes;

        $size_formatted       = human_file_size($bytes) . " (" . number_format($bytes) . " bytes)";

        $sha256               = $server_mod->direct_download->sha256;

        $filename             = $server_mod->direct_download->filename;

        $current_version      = $server_mod->current_version;

        $release_date         = $server_mod->release_date;

        $description          = $server_mod->description;

        $version_details      = <<<HTML
filename <span class="span_color_00">··</span> {$filename}
version <span class="span_color_00">···</span> {$current_version}
released <span class="span_color_00">··</span> {$release_date}
size <span class="span_color_00">······</span> $size_formatted
                <div class="sha256">
                    <div class="sha256_label">sha256</div>
                    <div class="sha256_hash"><textarea rows="1" cols="27" onclick="this.select()" wrap="off" readonly>{$sha256}</textarea><span class="span_triple_dot">⸱⸱⸱</span></div>
                </div>
HTML;

        $rows .= <<<HTML
        <tr id="{$anchor_slug}" data-location="#{$anchor_slug}">
            <td class="mod_name_and_description">
                <div>
                    <div class="name">
                        {$mod_name}
                        <div class="anchor_link_icon">
                            <a href="#{$anchor_slug}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                    <path d="M15 9l6-6s6-6 12 0 0 12 0 12l-8 8s-6 6-12 0c-1.125-1.125-1.822-2.62-1.822-2.62l3.353-3.348S14.396 18.396 16 20c0 0 3 3 6 0l8-8s3-3 0-6-6 0-6 0l-3.729 3.729s-1.854-1.521-5.646-.354L15 9z"/>
                                    <path d="M20.845 27l-6 6s-6 6-12 0 0-12 0-12l8-8s6-6 12 0c1.125 1.125 1.822 2.62 1.822 2.62l-3.354 3.349s.135-1.365-1.469-2.969c0 0-3-3-6 0l-8 8s-3 3 0 6 6 0 6 0l3.729-3.729s1.854 1.521 5.646.354l-.374.375z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="description">{$description}</div>
                </div>
            </td>
            <td class="author text_center">{$author}</td>
            <td class="forum_wiki text_center">$forum_wiki_urls</td>
            <td class="github text_center">$github_urls</td>
            <td class="direct_download text_center">{$direct_download_urls}</td>
            <td class="version_details">{$version_details}</td>
        </tr>\n
HTML;
    }
}


//
// lock table header so it does not scroll with table body
//
//
//  mod name    author         forum / wiki    github      direct download    current version    version release date
//
//  mod name    author name    forum 1         readme      main                    v0.0               Month Day, Year
//                             forum 2         releases    mirror
//                                                         archive


// echo "<pre>" . print_r($text_matches[1][0], 1) . "</pre>";

$total_size = human_file_size($total_size) . "(" . number_format($total_size) . " bytes)";

$header_information = <<<HTML
<span class="counter">{$counter}</span> mods <span class="pipe">｜</span> {$total_size}
<hr class="hr_00">
download all  ‌
<hr class="hr_01">
main     archive
<hr class="hr_02">
<a href="localhost">zip</a>      <a href="localhost">zip</a>    ‌
<a href="localhost">rar</a>      <a href="localhost">rar</a>    ‌
<a href="localhost">7z</a>       <a href="localhost">7z</a>     ‌
<a href="localhost">tar.gz</a>   <a href="localhost">tar.gz</a> ‌

<div class="Ko-fi text_center"><a href="https://ko-fi.com/jesterjunk" title="Ko-fi" target="_blank">

<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 101 40">
    <defs>
        <linearGradient id="linear-gradient" x1="9.55" y1="-1715.77" x2="13.7" y2="-1728.51" gradientTransform="matrix(1, 0, 0, -1, 4.26, -1707.68)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#ff4ea3" />
            <stop offset="1" stop-color="#ff5e5b" />
        </linearGradient>
    </defs>
    <title>Ko-fi</title>
    <circle class="cls-1" cx="20.4" cy="20" r="19.7" />
    <g id="Layer_1-2" data-name="Layer 1-2">
        <g id="Layer_1-3" data-name="Layer 1-3">
            <path class="cls-2" d="M30.4,21.9a15.48,15.48,0,0,1-2.2.1V14.8h1.5A3,3,0,0,1,32.2,16a3.57,3.57,0,0,1,.8,2.3A3.35,3.35,0,0,1,30.4,21.9Zm6.2-5a6.55,6.55,0,0,0-2.9-4.5A7.67,7.67,0,0,0,29.3,11H7.3a1.28,1.28,0,0,0-1.1,1.2v.3s-.1,9.7.1,15a3.29,3.29,0,0,0,3.3,3.1s10.1,0,14.9-.1h.7c2.8-.7,3-3.3,3-4.7C33.7,26,37.6,22.1,36.6,16.9Z" />
            <path class="cls-3" d="M17,26.4c.3.1.4,0,.4,0s3.5-3.2,5.1-5.1c1.4-1.7,1.5-4.4-.9-5.5S17.2,17,17.2,17a3.94,3.94,0,0,0-5.5-.6l-.1.1c-1.2,1.3-.8,3.5.1,4.7a60.17,60.17,0,0,0,5.1,5Z" />
            <path class="cls-4" d="M17.2,26.5a.37.37,0,0,0,.3-.1s3.5-3.2,5.1-5.1c1.4-1.7,1.5-4.4-.9-5.5S17.3,17,17.3,17a3.94,3.94,0,0,0-5.5-.6l-.1.1c-1.2,1.3-.8,3.5.1,4.7A62.58,62.58,0,0,0,17,26.3C17,26.5,17.1,26.5,17.2,26.5Z" />
        </g>
    </g>
    <path class="cls-5" d="M59.5,26.9a1.09,1.09,0,0,1,.1.5,1.61,1.61,0,0,1-.5,1.1,1.85,1.85,0,0,1-1.2.5c-.2,0-.4-.1-.6-.1a2.18,2.18,0,0,1-.5-.4l-5.5-7.2-2.4,2.3v4a1.5,1.5,0,0,1-.4,1.1,1.59,1.59,0,0,1-1.2.4,1.38,1.38,0,0,1-1.5-1.5V13a1.61,1.61,0,0,1,.5-1.1,1.29,1.29,0,0,1,1.2-.4A1.38,1.38,0,0,1,49,13v6.9L57.1,12a1.56,1.56,0,0,1,1.2-.6,1.23,1.23,0,0,1,1,.5,1.78,1.78,0,0,1,.4,1,1.39,1.39,0,0,1-.5,1L53.7,19l5.6,7.4A.76.76,0,0,1,59.5,26.9Z" />
    <path class="cls-5" d="M73.6,26a6.67,6.67,0,0,1-2.5,2.5,7.26,7.26,0,0,1-7,0A6.67,6.67,0,0,1,61.6,26a7.65,7.65,0,0,1,0-7.2,6.67,6.67,0,0,1,2.5-2.5,7.06,7.06,0,0,1,6.9,0,7.47,7.47,0,0,1,2.5,2.5,6.44,6.44,0,0,1,.9,3.6A5.94,5.94,0,0,1,73.6,26ZM71,20.1a4.28,4.28,0,0,0-1.4-1.6,3.88,3.88,0,0,0-3.9,0A4,4,0,0,0,64.3,20a4.19,4.19,0,0,0-.5,2.2,5.45,5.45,0,0,0,.5,2.2,4,4,0,0,0,1.4,1.5,3.7,3.7,0,0,0,3.8,0,4,4,0,0,0,1.4-1.5,5.45,5.45,0,0,0,.5-2.2,4,4,0,0,0-.4-2.1Z" />
    <path class="cls-5" d="M77.1,22.4a1.19,1.19,0,0,1-.4-1.1,2.1,2.1,0,0,1,.4-1.1,1.5,1.5,0,0,1,1.1-.4h4.4a1.38,1.38,0,0,1,1.5,1.5,1.78,1.78,0,0,1-.4,1,1.5,1.5,0,0,1-1.1.4H78.2A1.43,1.43,0,0,1,77.1,22.4Z" />
    <path class="cls-5" d="M92.3,13.5a1.43,1.43,0,0,0-.3,1.1v1.2h2.3a1.37,1.37,0,0,1,1.4,1.4,1.37,1.37,0,0,1-1.4,1.4H92v8.9a1.5,1.5,0,0,1-.4,1.1,1.57,1.57,0,0,1-2.2,0,1.5,1.5,0,0,1-.4-1.1V18.6H87.7a1.37,1.37,0,0,1-1.4-1.4,1.37,1.37,0,0,1,1.4-1.4h1.4V14.6a4,4,0,0,1,1.3-3.1,5.17,5.17,0,0,1,3.7-1.2,2.93,2.93,0,0,1,1.6.4,1.21,1.21,0,0,1,.7,1.2,1.69,1.69,0,0,1-.3,1,1.27,1.27,0,0,1-.9.4h-.6c-.3-.1-.7-.1-1-.2A1.7,1.7,0,0,0,92.3,13.5Zm5.3.1a1,1,0,0,1-.3-1v-.5a1.16,1.16,0,0,1,.4-1,2.66,2.66,0,0,1,1.2-.3,2.38,2.38,0,0,1,1.2.3,1.28,1.28,0,0,1,.4,1v.5a1.28,1.28,0,0,1-.4,1,2.77,2.77,0,0,1-1.3.3A2.66,2.66,0,0,1,97.6,13.6Zm2.3,15a1.19,1.19,0,0,1-1.1.4,1.38,1.38,0,0,1-1.5-1.5V17.1a1.5,1.5,0,0,1,.4-1.1,1.19,1.19,0,0,1,1.1-.4,1.38,1.38,0,0,1,1.5,1.5V27.5a1.19,1.19,0,0,1-.4,1.1Z" />
</svg>

</a></div>
HTML;
?>

<div class="scroll_wall"></div>

<div class="header_container">

    <div class="header_information">

        <div class="disclaimer">
            <div class="github-corner">
                <a href="https://github.com/jesterjunk/WurmUnlimited" target="_blank" title="View source on GitHub" aria-label="View source on GitHub">
                    <svg width="111" height="111" viewBox="0 0 250 250" aria-hidden="true">
                        <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
                        <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
                        <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
                    </svg>
                </a>
            </div>
            <div class="disclaimer_header text_right">DISCLAIMER</div>
            <div class="disclaimer_message text_right">
                I did not create any of these mods.<br>
                <div class="spacer"></div>
                Please do your own research to verify<br>
                interoperability between the mods.<br>
                <div class="spacer"></div>
                DO NOT blame me when something breaks!
            </div><!--
            <div class="div_copy_to_clipboard_message">
                <b><i>left click</i></b> a table row to copy<br>its anchor address to clipboard
            </div>-->
        </div>

        <a id="h3_header_title_link" href="." title="Wurm Unlimited Server Mods">
            <h3 class="text_center">Wurm Unlimited Server Mods</h3>
        </a>

        <div class="stats text_right"><?=$header_information?></div>

    </div>

</div>

<div class="table_container">

<table id="mods_table" cellpadding="0">
    <thead>
        <tr>
            <th class="mod_name_and_description">mod name and description</th>
            <th class="author">author</th>
            <th class="forum_wiki">info</th>
            <th class="github">github</th>
            <th class="direct_download">download</th>
            <th class="version_details">file details</th>
        </tr>
    </thead>
    <tbody>
<?=$rows?>
    </tbody>
</table>

</div>



<?php

// echo "<pre>\n{$json}\n</pre>";

?>


<script>


// var current_anchor = window.top.location.hash.substr(1)


// window.addEventListener('load',function(){

//     if (window.top.location.hash.substr(1)) {

//         document.querySelector(`[id="${window.top.location.hash.substr(1)}"]`).classList.add('selected');
//     }

//     document.querySelectorAll(`tbody tr`).forEach(tr => {

//         tr.addEventListener('click', () => {

//             window.location = tr.dataset.location;

//             var selected = document.querySelector(".selected")

//             if (selected) { selected.classList.remove("selected")            }

//             tr.classList.add("selected")


//             // copy current address to clipboard
//             var dummy = document.createElement('input')

//             document.body.appendChild(dummy)
//             dummy.value = window.location.href
//             dummy.select()
//             document.execCommand('copy')
//             document.body.removeChild(dummy)
//         })
//     })
// }
)
</script>


</body>
</html>
