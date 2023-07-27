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
        --color-00: hsl(70, 8%, 15%);
        --color-01: hsl(50, 12%, 20%);

        --monospace-font-00: 'IBM Plex Mono', monospace;
    }

    body {
        margin: 24px 24px 48px;
        color: hsl(60, 30%, 96%);
        font-family: Arial, Helvetica, sans-serif;
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

    table thead tr th.forum_wiki a,
    table thead tr th.forum_wiki a,
    table tbody tr td.github a,
    table thead tr th.github a {
        padding-left:  11px;
        padding-right: 11px;
    }

    hr {
        margin: 6px 0;
        border: 0;
        height: 2px;
        background-color: var(--color-00);
    }

    table {
        margin: 0 auto;
/*        width: 100%;*/
        border-spacing: 0 24px;
    }
    table thead tr th {
        position: relative;
        bottom: -12px;
        padding: 8px;
        background: hsl(70, 8%, 15%);
    }
    table thead tr th.direct_download {
        padding-left: 0;
        padding-right: 0;
    }
    table thead tr th.forum_wiki {
        white-space: nowrap !important;
        width: 64px;
    }
    table tbody tr td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }
    table tbody tr td:not(:first-child) {
        border-left:  1px solid var(--color-00);
    }
    table tbody tr td:last-of-type {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    table tbody tr td:not(:last-of-type) {
        border-right:  1px solid var(--color-00);
    }
    table tbody tr {
        filter: drop-shadow(0 0 4px hsla(0, 0%, 0%, .5));
    }
    table tbody tr td {
        padding-top: 6px;
        padding-bottom: 6px;
        background-color: var(--color-01);
    }
    table tbody tr td.mod_num,
    table tbody tr td.mod_name,
    table tbody tr td.author,
    table tbody tr td.current_version,
    table tbody tr td.version_details,
    table tbody tr td.description {
        padding-left:  8px;
        padding-right: 8px;
    }
    table tbody tr td.mod_name {
/*        width: 400px;*/
        min-width: calc(420px + 6px);
    }
    table tbody tr td.description {
/*        width: 420px;*/
        min-width: calc(460px + 12px);
    }

    table tbody tr td.version_details {
/*        vertical-align: text-top;*/
        font-family: var(--monospace-font-00);
        white-space: pre;
        font-size: .75em;
    }

    div.sha256 {
        position: relative;
        bottom: -3px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    div.sha256_label {
        flex: 4;
    }
    div.sha256_hash {
        flex: 19;
        margin-bottom: 0;
    }
    div.sha256_hash textarea {
        overflow: hidden;
        color: silver;
        border: none;
        background-color: var(--color-01);
        outline: none;
        resize: none;
    }
    span.span_color_00 {
        color: gray;
    }
    span.aka {
        display: block;
        padding-top:    4px;
        padding-bottom: 4px;
        font-size: .8em;
        color: silver;
    }
    span.span_triple_dot {
        position: relative;
        left: 3px;
        bottom: 2px;
/*        font-size: 1em;*/
        font-weight: bold;
        color: silver;
        letter-spacing: .1em;
    }
    span.span_mod_counter {
        position: relative;
        bottom: 8px;
        color: silver;
        font-family: var(--monospace-font-00);
    }
    div.mod_stats {
        block-size: fit-content;
/*        top: calc(-1.1em - 6px);*/
        background-color: var(--color-01);
        filter: drop-shadow(0 0 4px hsla(0, 0%, 0%, .5));
        border-radius: 10px;
        height: calc(118px + 22px);
    }
    div.mod_stats div.stats {
        padding-left: 11px;
        padding-right: 69px;
        padding-top: 11px;
        padding-bottom: 11px;
        float: right;
        color: silver;
        font-family: var(--monospace-font-00);
        font-size: 1em;
        font-weight: 500;
        white-space: pre;
        line-height: 1.05em;
        letter-spacing: .01em;
    }

    div.mod_stats h3 {
        z-index: 111;
        position: relative;
        top: calc(4px + (129px / 2));
        margin: 0;
        line-height: 0;
        font-family: Verdana, Geneva, sans-serif;
    }
    div.virustotal {
        position: relative;
        display: flex;
        height: 100%;
        align-items: center;
        margin-left: 4px;
        margin-right: 4px;
    }
    div.virustotal a {
        display: flex;
        align-items: center;
        width: 100px;
        bottom: -3px;
        background-color: hsl(72, 8%, 12%);
        border-opacity
/*        border: 2px solid pink;*/
        height: 24px;
        border-radius: 5px;
        opacity: .84;
        padding-top:  3px;
        padding-bottom:  3px;
    }
    div.virustotal a svg {
        position: absolute;
        top: 4px;
        width: 100%%;
        padding-left:  6px;
        padding-right: 6px;
    }
    div.virustotal a div {
        position: absolute;
        right: 8px;
    }
    </style>
</head>
<body>


<?php


function human_file_size($size,$unit="") {
  if( (!$unit && $size >= 1<<30) || $unit == " GB")
    return number_format($size/(1<<30),2)." GB";
  if( (!$unit && $size >= 1<<20) || $unit == " MB")
    return number_format($size/(1<<20),2)." MB";
  if( (!$unit && $size >= 1<<10) || $unit == " KB")
    return number_format($size/(1<<10),2)." KB";
  return number_format($size)." bytes";
}


function forum_wiki_urls($server_mod) {

    $forum_1_main    = $server_mod->forum_1->main;
    $forum_1_archive = $server_mod->forum_1->archive;

    $forum_2_main    = $server_mod->forum_2->main;
    $forum_2_archive = $server_mod->forum_2->archive;

    $wiki            = $server_mod->wiki;

    $forum_wiki_urls = "";

        if ($forum_1_main) {
            $forum_wiki_urls .= <<<HTML
                <a href="{$forum_1_main}" title="{$forum_1_main}" target="_blank">forum 1</a>\n
HTML;
        }
        if ($forum_1_archive) {
            $forum_wiki_urls .= <<<HTML
                <a href="{$forum_1_archive}" title="{$forum_1_archive}" target="_blank">f1 arch</a>\n
HTML;
        }
        if ($forum_2_main) {
            $forum_wiki_urls .= <<<HTML
                <a href="{$forum_2_main}" title="{$forum_2_main}" target="_blank">forum 2</a>\n
HTML;
        }
        if ($forum_2_archive) {
            $forum_wiki_urls .= <<<HTML
                <a href="{$forum_2_archive}" title="{$forum_2_archive}" target="_blank">f2 arch</a>\n
HTML;
        }
        if ($wiki) {
            $forum_wiki_urls .= <<<HTML
                <a href="{$wiki}" title="{$wiki}" target="_blank">wiki</a>\n
HTML;
        }

    return "\n                " . str_replace("\n", "<br><hr>\n", trim($forum_wiki_urls)) . "\n            ";
}


function github_urls($server_mod) {

    $readme    = $server_mod->github->readme;
    $release  = $server_mod->github->release;

    $github_urls = "";

        if ($readme) {
            $github_urls .= <<<HTML
                <a href="{$readme}" title="{$readme}" target="_blank">readme</a>\n
HTML;
        }
        if ($release) {
            $github_urls .= <<<HTML
                <a href="{$release}" title="{$release}" target="_blank">release</a>\n
HTML;
        }

    return "\n                " . str_replace("\n", "<br><hr>\n", trim($github_urls)) . "\n            ";
}


function direct_download_urls($server_mod) {

    $main       = $server_mod->direct_download->main;
    $mirror     = $server_mod->direct_download->mirror;
    $archive    = $server_mod->direct_download->archive;
    $virustotal = $server_mod->direct_download->virustotal;

    $direct_download_urls = "";

        if ($main) {
            $direct_download_urls .= <<<HTML
                <a href="{$main}" title="{$main}" target="_blank">main</a>\n
HTML;
        }
        if ($mirror) {
            $direct_download_urls .= <<<HTML
                <a href="{$mirror}" title="{$mirror}" target="_blank">mirror</a>\n
HTML;
        }
        if ($archive) {
            $direct_download_urls .= <<<HTML
                <a href="{$archive}" title="{$archive}" target="_blank">archive</a>\n
HTML;
        }
        if ($virustotal) {
            $direct_download_urls .= <<<HTML
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

        $version_details = <<<HTML
filename <span class="span_color_00">··</span> {$filename}
version <span class="span_color_00">···</span> {$current_version}
released <span class="span_color_00">··</span> {$release_date}
size <span class="span_color_00">······</span> $size_formatted
                <div class="sha256">
                    <div class="sha256_label">sha256</div>
                    <div class="sha256_hash"><textarea rows="1" cols="27" onclick="this.select()" wrap="off" readonly>{$sha256}</textarea><span class="span_triple_dot">⸱⸱⸱</span></div>
                </div>
HTML;

        $description          = $server_mod->description;

        $rows .= <<<HTML
        <tr>
            <td class="mod_name text_center">{$mod_name}</td>
            <td class="author text_center">{$author}</td>
            <td class="forum_wiki text_center">$forum_wiki_urls</td>
            <td class="github text_center">$github_urls</td>
            <td class="direct_download text_center">{$direct_download_urls}</td>
            <td class="version_details">{$version_details}</td>
            <td class="description">{$description}</td>
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

$mod_stats = <<<HTML
   mod count: {$counter}

  total size: {$total_size}<!--

download all:
<a href="localhost">zip</a>｜<a href="localhost">rar</a>｜<a href="localhost">7z</a>｜<a href="localhost">tar.gz</a>— main
<a href="localhost">zip</a>｜<a href="localhost">rar</a>｜<a href="localhost">7z</a>｜<a href="localhost">tar.gz</a>— archive.org-->
HTML;
?>


<div class="outer_container">

<div class="mod_stats">

    <h3 class="text_center">Wurm Unlimited Server Mods</h3>

    <div class="stats"><?=$mod_stats?></div>

    <div id="github-corner">
        <a href="https://github.com/jesterjunk/WurmUnlimited" target="_blank" class="github-corner" title="View source on GitHub" aria-label="View source on GitHub">
            <svg width="80" height="80" viewBox="0 0 250 250" style="fill: hsl(50, 11%, 41%); color: #000; float: right; position: absolute; top: 0; border: 0; right: 0; border-top-right-radius: 10px;" aria-hidden="true">
                <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
                <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
                <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
            </svg>
        </a>
        <style>
        .github-corner {
            border-radius: 10px;
        }
        .github-corner:hover .octo-arm {
            animation:octocat-wave 560ms ease-in-out
        }
        @keyframes octocat-wave {
            0%,100%{
                transform:rotate(0)
            }
            20%,60%{
                transform:rotate(-25deg)
            }
            40%,80%{
                transform:rotate(10deg)
            }
        }
        @media (max-width:500px) {
            .github-corner:hover .octo-arm{
                animation:none
            }
            .github-corner .octo-arm {
                animation:octocat-wave 560ms ease-in-out
            }
        }
        </style>
    </div>

</div>


<table cellpadding="0">
    <thead>
        <tr>
            <th class="mod_name">mod name</th>
            <th class="author">author</th>
            <th class="forum_wiki">info</th>
            <th class="github">github</th>
            <th class="direct_download">download</th>
            <th class="version_details">file details</th>
            <th class="description">description</th>
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


</body>
</html>
