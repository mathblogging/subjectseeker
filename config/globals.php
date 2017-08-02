<?php

$sitename = "Mathblogging.org";
$subtitle = "Your one stop shop for mathematical blogs";
$siteadminemail = "admin@mathblogging.org";
$siteApprovalEmail = "admin@mathblogging.org";
$contactEmail = "admin@mathblogging.org";
$dbName = "";
$dbUser = "";
$dbPass = "";
$host = "mysql.mb.mathpeople.org";
$debugSite = "false";
$httpsEnabled = "false";
$themeName = "scienceseeker";

// URLs
$homeUrl = "http://www.mathblogging.org";
$imagesUrl = $homeUrl . "/images";
$jsUrl = $homeUrl . "/js";
$thirdPartyUrl = $homeUrl . "/third-party";
$themeUrl = $homeUrl . "/themes/scienceseeker/";
$scriptsUrl = $homeUrl . "/scripts";
$feedUrl = $homeUrl. "/feed/posts/";
//$localStylesheet = "http://mb.mathpeople.org/theme/mbstyle.css";
$customHead = '<link rel="stylesheet" type="text/css" href="/local/mbstyle.css" media="all" />';

// Files and directories
$basedir = "/home/pkrautzberger/mb.mathpeople.org";
$imagedir = "$basedir/images";
$cachedir = "$basedir/cache";
$configFile = "$basedir/config/pages.config";
$crawlerLock = "$basedir/cron/lock.txt";

// CitationSeeker URLs
$rfrId = "mathblogging.org";
$crossRefUrl = "http://api.labs.crossref.org/search?q=";
$pubMedUrl = "http://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?db=pubmed&term=";
$pubMedIdUrl = "http://eutils.ncbi.nlm.nih.gov/entrez/eutils/efetch.fcgi?db=pubmed&retmode=xml&id=";
$arxivUrl = "http://export.arxiv.org/api/query?max_results=6&search_query=all:";

// Social Network Integration
$googleClientId = "***.apps.googleusercontent.com"; // Google API client ID
$googleClientSecret = "***"; // Google API client secret code
$googleApiKey = "***"; // Google API key
$recaptchaPublicKey = "***"; // Recaptcha Public Key
$recaptchaPrivateKey = "***"; // Recaptcha Private Key
$twitterConsumerKey = "***"; // Twitter Consumer Key
$twitterConsumerSecret = "***"; // Twitter Consumer Secret Key
$twitterListId = "***"; // Twitter ID of Member List
$twitterListToken = "***"; // Twitter Token for account that owns the member list
$twitterListTokenSecret = "***"; // Twitter Secret Token for account that owns the member list
$twitterNotesToken = "***"; // Twitter Token of Twitter account that tweets all notes
$twitterNotesTokenSecret = "***"; // Twitter Secret Token of Twitter account that tweets all notes
$bitlyUser = "mathblogging"; // bitly user
$bitlyKey = "***"; // bitly API key
$bitlyApiUrl = "http://api.bit.ly/v3/shorten?login="; // bitly API url
$twitterListApi = "https://api.twitter.com/1/lists/statuses.json?list_id=81470191"; // Twitter list API link

// Parameters
$numResults = 30;
$maximumResults = 500;

// E-mails
$rejectedSiteReasons = "	1. The site may not have enough science content. We are flexible in our definition of a \"science\" site, but science must be one of the main topics.

	2. The site must produce primarily original content that does not aggregate other sources. In no case is plagiarism allowed. When other sources are used, they must be clearly cited.

	3. Claims without scientific evidence that fall within the realm of pseudoscience and misinformation are not allowed."; // Reasons why a site is rejected to include in an email to the author.

?>
