<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Backend Developer Assessment</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.35.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.35.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authentication-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication-endpoints">
                    <a href="#authentication-endpoints">Authentication Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-authentication-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-endpoints-POSTapi-register">
                                <a href="#authentication-endpoints-POSTapi-register">Register a user on the system.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-endpoints-POSTapi-login">
                                <a href="#authentication-endpoints-POSTapi-login">Login a specified user.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-tasks-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="tasks-endpoints">
                    <a href="#tasks-endpoints">Tasks Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-tasks-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="tasks-endpoints-GETapi-tasks">
                                <a href="#tasks-endpoints-GETapi-tasks">Display a listing of Tasks.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-endpoints-POSTapi-tasks">
                                <a href="#tasks-endpoints-POSTapi-tasks">Store a newly created Task.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-endpoints-GETapi-tasks--id-">
                                <a href="#tasks-endpoints-GETapi-tasks--id-">Display the specified Task.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-endpoints-PUTapi-tasks--id-">
                                <a href="#tasks-endpoints-PUTapi-tasks--id-">Update the specified Task.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="tasks-endpoints-DELETEapi-tasks--id-">
                                <a href="#tasks-endpoints-DELETEapi-tasks--id-">Delete the specified Task.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 19, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This Documents the Task Endpoint</p>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="authentication-endpoints">Authentication Endpoints</h1>

    

                                <h2 id="authentication-endpoints-POSTapi-register">Register a user on the system.</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"culpa\",
    \"email\": \"shaniya.rogahn@example.com\",
    \"password\": \"^DS|mYQ3_u\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "culpa",
    "email": "shaniya.rogahn@example.com",
    "password": "^DS|mYQ3_u"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 91,
            &quot;name&quot;: &quot;Ms. Ophelia Toy&quot;,
            &quot;email&quot;: &quot;marvin.clifton@example.org&quot;,
            &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 92,
            &quot;name&quot;: &quot;Prof. Ethelyn Baumbach&quot;,
            &quot;email&quot;: &quot;raoul.mcglynn@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="culpa"
               data-component="body">
    <br>
<p>Example: <code>culpa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="shaniya.rogahn@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>shaniya.rogahn@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="^DS|mYQ3_u"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>^DS|mYQ3_u</code></p>
        </div>
        </form>

                    <h2 id="authentication-endpoints-POSTapi-login">Login a specified user.</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"owen.johnson@example.net\",
    \"password\": \"U&lt;Srm]$EM\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "owen.johnson@example.net",
    "password": "U&lt;Srm]$EM"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 93,
            &quot;name&quot;: &quot;Lukas Grimes&quot;,
            &quot;email&quot;: &quot;elsa54@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 94,
            &quot;name&quot;: &quot;Dr. Nicolette Lynch IV&quot;,
            &quot;email&quot;: &quot;jschmeler@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="owen.johnson@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>owen.johnson@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="U<Srm]$EM"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>U&lt;Srm]$EM</code></p>
        </div>
        </form>

                <h1 id="tasks-endpoints">Tasks Endpoints</h1>

    

                                <h2 id="tasks-endpoints-GETapi-tasks">Display a listing of Tasks.</h2>

<p>
</p>



<span id="example-requests-GETapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tasks?term=repellendus&amp;per_page=15" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
);

const params = {
    "term": "repellendus",
    "per_page": "15",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 107,
            &quot;created_by&quot;: 95,
            &quot;title&quot;: &quot;Voluptatem rerum et autem quis.&quot;,
            &quot;description&quot;: &quot;Vel corporis esse eligendi non. Vitae porro qui molestias itaque.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 95,
                &quot;name&quot;: &quot;Myrl Goldner Jr.&quot;,
                &quot;email&quot;: &quot;stone.mertz@example.net&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 108,
            &quot;created_by&quot;: 96,
            &quot;title&quot;: &quot;Quia non et et.&quot;,
            &quot;description&quot;: &quot;Nihil qui sint est veritatis voluptate qui sint. Est quo qui deserunt exercitationem. Nihil ducimus beatae quo corporis.&quot;,
            &quot;completed&quot;: false,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 96,
                &quot;name&quot;: &quot;Dr. Clinton Altenwerth&quot;,
                &quot;email&quot;: &quot;jerde.elody@example.com&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks" data-method="GET"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks"
                    onclick="tryItOut('GETapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks"
                    onclick="cancelTryOut('GETapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>term</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="term"                data-endpoint="GETapi-tasks"
               value="repellendus"
               data-component="query">
    <br>
<p>Search query parameter for string data type Example: <code>repellendus</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>per_page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="per_page"                data-endpoint="GETapi-tasks"
               value="15"
               data-component="query">
    <br>
<p>Items per page Example: <code>15</code></p>
            </div>
                </form>

                    <h2 id="tasks-endpoints-POSTapi-tasks">Store a newly created Task.</h2>

<p>
</p>



<span id="example-requests-POSTapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"created_by\": 5,
    \"title\": \"ipsum\",
    \"description\": \"Aut aspernatur eos et nisi culpa.\",
    \"completed\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "created_by": 5,
    "title": "ipsum",
    "description": "Aut aspernatur eos et nisi culpa.",
    "completed": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 109,
            &quot;created_by&quot;: 97,
            &quot;title&quot;: &quot;Ea id accusantium provident.&quot;,
            &quot;description&quot;: &quot;Sunt sunt enim est culpa id similique. Tempora dolores repellat ut sit sint magnam nihil. Delectus et omnis tempora sed adipisci temporibus quis.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 97,
                &quot;name&quot;: &quot;Adrianna Hilpert Sr.&quot;,
                &quot;email&quot;: &quot;rshields@example.net&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 110,
            &quot;created_by&quot;: 98,
            &quot;title&quot;: &quot;Aut architecto non cum blanditiis odit.&quot;,
            &quot;description&quot;: &quot;Voluptate et quia vel veritatis. Exercitationem dolorum omnis et est. Ipsam sit ipsa sequi neque repudiandae eos. Blanditiis itaque aspernatur soluta aliquam laudantium quae nihil.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 98,
                &quot;name&quot;: &quot;Grayson Moore&quot;,
                &quot;email&quot;: &quot;enrico.dooley@example.net&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tasks" data-method="POST"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tasks"
                    onclick="tryItOut('POSTapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tasks"
                    onclick="cancelTryOut('POSTapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>created_by</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="created_by"                data-endpoint="POSTapi-tasks"
               value="5"
               data-component="body">
    <br>
<p>Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-tasks"
               value="ipsum"
               data-component="body">
    <br>
<p>Example: <code>ipsum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tasks"
               value="Aut aspernatur eos et nisi culpa."
               data-component="body">
    <br>
<p>Example: <code>Aut aspernatur eos et nisi culpa.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>completed</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-tasks" style="display: none">
            <input type="radio" name="completed"
                   value="true"
                   data-endpoint="POSTapi-tasks"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-tasks" style="display: none">
            <input type="radio" name="completed"
                   value="false"
                   data-endpoint="POSTapi-tasks"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="tasks-endpoints-GETapi-tasks--id-">Display the specified Task.</h2>

<p>
</p>



<span id="example-requests-GETapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tasks/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 111,
            &quot;created_by&quot;: 99,
            &quot;title&quot;: &quot;Libero ratione eaque qui autem esse.&quot;,
            &quot;description&quot;: &quot;Aut sint eveniet qui sunt illum. Vel est rerum veritatis nostrum voluptate sed.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 99,
                &quot;name&quot;: &quot;Dr. Giovanna Will DDS&quot;,
                &quot;email&quot;: &quot;tressa45@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 112,
            &quot;created_by&quot;: 100,
            &quot;title&quot;: &quot;Eveniet nam modi odio adipisci unde ad.&quot;,
            &quot;description&quot;: &quot;Repellendus corrupti asperiores et porro. Esse eum natus est commodi qui. Atque eum iusto eos aut harum sed et totam. Voluptatem et omnis fugit ipsa quas commodi.&quot;,
            &quot;completed&quot;: false,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 100,
                &quot;name&quot;: &quot;Magnus Turcotte&quot;,
                &quot;email&quot;: &quot;sammie69@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks--id-" data-method="GET"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks--id-"
                    onclick="tryItOut('GETapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks--id-"
                    onclick="cancelTryOut('GETapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tasks--id-"
               value="13"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>13</code></p>
            </div>
                    </form>

                    <h2 id="tasks-endpoints-PUTapi-tasks--id-">Update the specified Task.</h2>

<p>
</p>



<span id="example-requests-PUTapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/tasks/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"sit\",
    \"description\": \"Et et ea voluptatem quia.\",
    \"completed\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sit",
    "description": "Et et ea voluptatem quia.",
    "completed": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 113,
            &quot;created_by&quot;: 101,
            &quot;title&quot;: &quot;Est impedit laudantium aut ab atque facere voluptate et.&quot;,
            &quot;description&quot;: &quot;Ipsum aut minus quo quia. Et optio odio hic assumenda impedit unde consequuntur. Nostrum placeat perspiciatis eaque. Id id repellat consequatur rerum necessitatibus.&quot;,
            &quot;completed&quot;: false,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 101,
                &quot;name&quot;: &quot;Mr. Evert Windler&quot;,
                &quot;email&quot;: &quot;ruthe01@example.org&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 114,
            &quot;created_by&quot;: 102,
            &quot;title&quot;: &quot;Possimus qui optio saepe ipsam perferendis similique quas.&quot;,
            &quot;description&quot;: &quot;A facilis qui qui debitis. Tempora voluptas quae et qui eum. Corrupti ab ut non. Sint doloremque et ut assumenda dolorum excepturi necessitatibus.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 102,
                &quot;name&quot;: &quot;Mrs. Jannie Little II&quot;,
                &quot;email&quot;: &quot;mossie11@example.net&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tasks--id-" data-method="PUT"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tasks--id-"
                    onclick="tryItOut('PUTapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tasks--id-"
                    onclick="cancelTryOut('PUTapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-tasks--id-"
               value="13"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>13</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-tasks--id-"
               value="sit"
               data-component="body">
    <br>
<p>Example: <code>sit</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tasks--id-"
               value="Et et ea voluptatem quia."
               data-component="body">
    <br>
<p>Example: <code>Et et ea voluptatem quia.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>completed</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-tasks--id-" style="display: none">
            <input type="radio" name="completed"
                   value="true"
                   data-endpoint="PUTapi-tasks--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-tasks--id-" style="display: none">
            <input type="radio" name="completed"
                   value="false"
                   data-endpoint="PUTapi-tasks--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="tasks-endpoints-DELETEapi-tasks--id-">Delete the specified Task.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/tasks/13" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/13"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 115,
            &quot;created_by&quot;: 103,
            &quot;title&quot;: &quot;Voluptatibus molestias assumenda est rem.&quot;,
            &quot;description&quot;: &quot;In corporis optio reiciendis aliquid et laborum ea. Illum neque architecto et sequi odit. Voluptatem asperiores optio autem est. Magnam quia aut animi enim est.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 103,
                &quot;name&quot;: &quot;Dr. Elizabeth Brown&quot;,
                &quot;email&quot;: &quot;casper97@example.com&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 116,
            &quot;created_by&quot;: 104,
            &quot;title&quot;: &quot;Quia blanditiis aperiam et modi.&quot;,
            &quot;description&quot;: &quot;Molestiae eaque consequuntur libero et minus. Aut facere quae assumenda qui voluptatibus vel. Deserunt laudantium voluptas rerum saepe pariatur officiis sint. Voluptatem ducimus accusantium alias adipisci. Dolorum voluptatem consequatur est occaecati ipsa consequatur consequatur error.&quot;,
            &quot;completed&quot;: true,
            &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;userDetails&quot;: {
                &quot;id&quot;: 104,
                &quot;name&quot;: &quot;Dr. Lemuel Ruecker&quot;,
                &quot;email&quot;: &quot;lyda95@example.com&quot;,
                &quot;email_verified_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-19T06:35:34.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tasks--id-" data-method="DELETE"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tasks--id-"
                    onclick="tryItOut('DELETEapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-tasks--id-"
               value="13"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>13</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
