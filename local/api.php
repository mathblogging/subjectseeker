<h2>Introduction</h2>

<p>You can now connect to the thousands of math news, blog posts and podcasts produced every week using our API thanks to <a href="https://code.google.com/p/subjectseeker/">SubjectSeeker</a>, the excellent software behind <a href="http://scienceseeker.org">ScienceSeeker.org</a>.</p>

<h2>Jumping right in</h2>

<p>You can get a first impression of how to build feeds by looking at the redirects for our old feeds.</p>

<ul>
	    <li> <a href="/feed_pure">The pure feed</a> </li>
	    <li> <a href="/feed_applied">The applied feed</a> </li>
	    <li> <a href="/feed_teachers">The teachers/educators feed</a> </li>
	    <li> <a href="/feed_visual">The visual feed</a> </li>
	    <li> <a href="/feed_history">The history feed</a> </li>
	    <li> <a href="/feed_art">The art feed</a> </li>
	    <li> <a href="/feed_fun">The fun feed</a> </li>
	    <li> <a href="/feed_journalism">The journalism feed</a> </li>
	    <li> <a href="/feed_commercial">The commercial feed</a> </li>
	    <li> <a href="/feed_researchers">The researchers feed</a> (pure, applied and history)</li> 
	    <li> <a href="/feed_all">The full feed</a> </li>
      </ul>

<h2>Formatting of search parameters in request URI</h2>

<p><span class="ss-bold">Base URL:</span> <a title="Go to search page." href="http://beta.mathblogging.org/search/default/">http://beta.mathblogging.org/search/default/</a></p>

<h3>Types</h3>

<p>The <span class="ss-parameter">type</span> of query is specified by the <span class="ss-parameter">type</span> parameter, with a value of <span class="ss-parameter-value">blog</span>, <span class="ss-parameter-value">post</span>, or <span class="ss-parameter-value">topic</span>:</p>

<ul class="margin-bottom">
	<li>?type=blog</li>
	<li>?type=post</li>
	<li>?type=topic</li>
</ul>

<p>This parameter is required.</p>

<h3>Filters</h3>

<p>If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">topic</span>, the only other parameter allowed in the query is the <span class="ss-parameter">toplevel</span> parameter, which must be <span class="ss-parameter-value">true</span>. This parameter is optional and does not need to be specified. This specifies that only top-level topics should be returned. Top level topics are the topics which Mathblogging.org will display in its Top Level Topics list.</p>

<p class="ss-example">&amp;filter0=toplevel&amp;value0=true</p>

<p>To request a list of all top-level parameters, the query would be:</p>

<p class="ss-example"><a title="Go to search page." href="http://beta.mathblogging.org/search/default/?type=topic">http://beta.mathblogging.org/search/default/?type=topic</a></p>
<p>or</p>
<p class="ss-example"><a title="Go to search page." href="http://beta.mathblogging.org/search/default/?type=topic&amp;filter0=toplevel&amp;value0=true">http://beta.mathblogging.org/search/default/?type=topic&amp;filter0=toplevel&amp;value0=true</a></p>

<p>If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span> or <span class="ss-parameter-value">post</span>:</p>

<p>Following the <span class="ss-parameter">type</span> parameter must be one or more <span class="ss-parameter">filter</span> parameters. Each <span class="ss-parameter">filter</span> parameter is numbered (<span class="ss-parameter">filter0</span>, <span class="ss-parameter">filter1</span>, <span class="ss-parameter">filter2</span>...) to match it with corresponding parameters such as <span class="ss-parameter">value</span> (<span class="ss-parameter">value0</span>...) and <span class="ss-parameter">modifier</span>.</p>

<p>The value of the <span class="ss-parameter">filter</span> parameter should be the name of the specified filter to apply (corresponding to the <span class="ss-parameter">name</span> element in the REST API). Each possible filter has other associated parameters. Possible filters are:</p>

<p><span class="ss-parameter-value ss-bold">topic:</span> select results from blogs/posts with the specified topic associated. Associated parameter: <span class="ss-parameter">value</span> (the name of the specified topic). For example, to filter on the topic Biology (if <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, return all blogs with a Biology topic; if <span class="ss-parameter">type</span> is <span class="ss-parameter-value">post</span>, return all posts with a Biology topic). See the <span class="ss-parameter">blog</span> filter to search for posts from a blog with a specific blog-level topic.</p>
<p class="ss-example">&amp;filter0=topic&amp;value0=Biology</p>

<p><span class="ss-parameter-value ss-bold">identifier:</span> Select posts with the specified unique internal identifier in the database, or blogs with the specified identifier, depending on how <span class="ss-parameter">type</span> was specified. Associated parameters: <span class="ss-parameter-value">value</span> (the unique identifier to search, must be numeric only).</p>
<p class="ss-example">&amp;filter0=identifier&amp;value0=7593</p>

<p><span class="ss-parameter-value ss-bold">title:</span> Select posts with the specified post title, or blogs with the specified blog title, depending on how <span class="ss-parameter">type</span> was specified. Associated parameters: <span class="ss-parameter-value">value</span> (the text of the title to search on) and <span class="ss-parameter-value">modifier</span> (default <span class="ss-parameter-value">modifier</span> is <span class="ss-parameter-value">all</span>, meaning the entire string must match. Alternatively, <span class="ss-parameter">modifier</span> may be <span class="ss-parameter-value">some</span>, meaning only a partial string must match).</p>
<p class="ss-example">&amp;filter0=title&amp;value0=Once+upon+a+time&amp;modifier0=all</p>

<p><span class="ss-parameter-value ss-bold">summary:</span> Select posts with the specified post summary, or blogs with the specified description, depending on how <span class="ss-parameter">type</span> was specified. Associated parameters: <span class="ss-parameter-value">value</span> (text of summary to search on) and <span class="ss-parameter-value">modifier</span>). Default <span class="ss-parameter">modifier</span> is <span class="ss-parameter-value">some</span> (meaning only a partial string must match). Alternatively, <span class="ss-parameter">modifier</span> may be <span class="ss-parameter-value">all</span> (meaning the entire string must match).</p>
<p class="ss-example">&amp;filter0=summary&amp;value0=Once+upon+a+time&amp;modifier0=all</p>

<p><span class="ss-parameter-value ss-bold">url:</span> Select posts with the specified post URL, or blogs with the specified URL, depending on how <span class="ss-parameter">type</span> was specified. Associated parameters: <span class="ss-parameter-value">value</span> (text of URI to search on) and <span class="ss-parameter-value">modifier</span>). Default <span class="ss-parameter">modifier</span> is <span class="ss-parameter-value">some</span> (meaning only a partial string must match). Alternatively, <span class="ss-parameter">modifier</span> may be <span class="ss-parameter-value">all</span> (meaning the entire string must match).</p>
<p class="ss-example">&amp;filter0=url&amp;value0=someblog.blogspot.com</p>

<p><span class="ss-parameter-value ss-bold">blog:</span> Select posts from blogs with the specified title, identifier, or topic. Note that searching with type=blog is equivalent to using the <span class="ss-parameter-value">title</span> or <span class="ss-parameter-value">topic</span> queries. Default <span class="ss-parameter">modifier</span> is <span class="ss-parameter-value">title-some</span> (search for posts from blogs whose title contains the specified string). Other modifiers are <span class="ss-parameter-value">title-all</span> (search for posts from blogs whose title completely matches the specified string), <span class="ss-parameter-value">identifier</span> (search for posts from blogs with the internal Mathblogging.org identifier specified), and <span class="ss-parameter-value">topic</span> (search for posts from blogs with the specified top-level topic).</p>
<p class="ss-example">&amp;filter0=blog&amp;modifier0=title-all&amp;value0=Scientifically+Speaking</p>

<p><span class="ss-parameter-value ss-bold">citation:</span> Select posts with the specified citation. If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, will return 0 results. Associated parameters: <span class="ss-parameter">modifier</span> (optional) (default <span class="ss-parameter-value">id-all</span>; alternatively may be <span class="ss-parameter-value">doi</span>, <span class="ss-parameter-value">pmid</span>, <span class="ss-parameter-value">arxiv</span>, <span class="ss-parameter-value">author</span>, <span class="ss-parameter-value">article-title</span> or <span class="ss-parameter-value">journal-title</span>. The <span class="ss-parameter">value</span> parameter contains the value of the string to search on; this is always a partial-text search.</p>
<p class="ss-example">&amp;filter0=citation&amp;modifier0=doi&amp;value0=10.1162/jocn.2006.18.11.1947</p>

<p><span class="ss-parameter-value ss-bold">has-citation:</span> Select posts which have at least one associated citation. If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, will return blogs that have posts with citations. Associated parameters: <span class="ss-parameter">modifier</span> parameter is optional and only available if filter is set to <span class="ss-parameter-value">true</span> and defaults to <span class="ss-parameter-value">all</span>, alternatively may be <span class="ss-parameter-value">doi</span>, <span class="ss-parameter-value">arxiv</span>, <span class="ss-parameter-value">pmid</span> or <span class="ss-parameter-value">other</span>; and <span class="ss-parameter">value</span> parameter is optional and defaults to <span class="ss-parameter-value">true</span>.</p>
<p class="ss-example">&amp;filter0=has-citation</p>
<p>or</p>
<p class="ss-example">&amp;filter0=has-citation&amp;value0=false</p>

<p><span class="ss-parameter-value ss-bold">is-recommended:</span> Select posts which have at least one associated recommendation. If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, will return 0 results. The associated <span class="ss-parameter">value</span> parameter is optional and defaults to <span class="ss-parameter-value">true</span>.</p>
<p class="ss-example">&amp;filter0=is-recommended</p>
<p>or</p>
<p class="ss-example">&amp;filter0=is-recommended&amp;value0=false</p>

<p><span class="ss-parameter-value ss-bold">recommended-by:</span> Select posts which have at least one associated recommendation by a certain user. If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, will return 0 results. The associated <span class="ss-parameter">value</span> parameter is required and contains the username of the specified user.</p>
<p class="ss-example">&amp;filter0=recommended-by&amp;value0=jphekman</p>

<p><span class="ss-parameter-value ss-bold">recommender-status:</span> Select posts which have at least one associated recommendation by a user with the specified status or greater status. If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, will return 0 results. The <span class="ss-parameter">value</span> parameter is optional and defaults to <span class="ss-parameter-value">user</span>; may also be <span class="ss-parameter-value">editor</span>.</p>
<p class="ss-example">&amp;filter0=recommender-status&amp;value0=editor</p>

<p><span class="ss-parameter-value ss-bold">min-recommendations:</span> Select posts which have at least the minimum number of associated recommendations. If <span class="ss-parameter">type</span> is <span class="ss-parameter-value">blog</span>, will return 0 results. The <span class="ss-parameter">value</span> parameter is required and takes a numeric value.</p>
<p class="ss-example">&amp;filter0=min-recommendations&amp;value0=10</p>

<h3>Using multiple parameters</h3>

<p>To specify multiple filters, increase the number of each <span class="ss-parameter">filter</span> parameter and its associated parameters. Filters may be specified more than once; if two of the same filter are specified, results matching both filters are returned.</p>
<p class="ss-example"><a href="http://beta.mathblogging.org/search/default/?type=post&amp;filter0=blog&amp;modifier0=topic&amp;value0=Biology&amp;filter1=recommended-by&amp;value1=sswchow&amp;filter2=title&amp;value2=Diesel">http://beta.mathblogging.org/search/default/?type=post&amp;filter0=blog&amp;modifier0=topic&amp;value0=Biology&amp;filter1=recommended-by&amp;value1=sswchow&amp;filter2=title&amp;value2=Diesel</a></p>
