
/* <!-- */
// If you're using a frameset and are not getting correct
// referrers, please uncomment the following line:
// pp_frames = true;

var _trxid = "";
var _trxacct = "";
var TRXproto = (window.location.protocol.indexOf("https:")==0) ? "https://" : "http://";
var TRXloc = TRXproto + "www.webtraxs.com/webtraxs.php";
var TRXdlloc = TRXproto + "www.webtraxs.com/logclick.php";
var LORloc = TRXproto + "www.webtraxs.com/lor.php";
var TRXvars = new Object();

// define some defaults
if (TRX_showme == null) { var TRX_showme = "n"; }
if (TRX_st == null) { var TRX_st = "img"; }

// get the user agent name
TRX_v = navigator.appName;

// get the screen resolution
TRX_c = 0;
if (TRX_v != "Netscape") { TRX_c = screen.colorDepth; }
else { TRX_c = screen.pixelDepth; }

// get the screen size
TRX_s = screen.width + "x" + screen.height;

// get the document's title
TRX_t = escape(document.title);

// get the document's referrer
var TRX_f = "";

// if pp_frames is true then try getting the framed referral (without error checking)
if (typeof(pp_frames) != "undefined")
{
  if (pp_frames) { TRX_f = top.document.referrer; }
}

// get the referral for non-multi-domained-framed sites using a Netscape browser
if ((TRX_f == "") || (TRX_f == "[unknown origin]") || (TRX_f == "unknown") || (TRX_f == "undefined"))
{
  if (document["parent"] != null)
  {
    // ACCESS ERROR HERE!
    if (parent["document"] != null)
    {
      if (parent.document["referrer"] != null)
      {
        if (typeof(parent.document) == "object") { TRX_f = parent.document.referrer; }
      }
    }
  }
}

// get the referral for the current document if a framed referral wasn't found
if ((TRX_f == "") || (TRX_f == "[unknown origin]") || (TRX_f == "unknown") || (TRX_f == "undefined"))
{
  if (document["referrer"] != null) { TRX_f = document.referrer; }
}

// convert all the unknown's into blank
if ((TRX_f == "") || (TRX_f == "[unknown origin]") || (TRX_f == "unknown") || (TRX_f == "undefined"))
{
  TRX_f = "";
}

// escape the referral
TRX_f = escape(TRX_f);

for (var i = 0; i < wto.length; i++)
{
  var params = wto[i];
  var fn = wto[i].shift();
  this[fn].apply(undefined, params);
}

function setWTID (id) { _trxid = id; }
function setWTAcct (acct) { _trxacct = acct; }

function alturl (r)
{
  //document.pphLoggerImage.src = "http://alt.webtraxs.com/pixel.gif" + r;
  document.pphLoggerImage.src = "http://alt.webtraxs.com/pixel.gif" + (typeof(r)!="undefined"?r:"");
  return false;
}

function altJs (r)
{
  document.open();
  //document.write("<img src=\"http://alt.webtraxs.com/pixel.gif"+r+"\" alt=\"\" border=\"0\" name=webtraxsImage>");
  document.write('<img src="http://alt.webtraxs.com/pixel.gif'+r+'" alt="" border="0" name=webtraxsImage>');
  document.close();
}

function pageValue (name, value)
{
  TRXvars[name] = value;
}

function addPageValues ()
{
  var str = "";
  for (T in TRXvars)
  {
    if (TRXvars[T]) { str = str + "&TRX_" + T + "=" + escape(TRXvars[T]); }
  }
  return str;
}

function resetAccount ()
{
  setWTID("");
  setWTAcct("");
  TRXvars = new Object();
}

function webTraxs ()
{
  if (isRobot()) { return; }

  // prepare data for logging
  var r = (_trxacct) ? "?acct=" + _trxacct : "?id=" + _trxid;
  r += "&referer=" + TRX_f + "&r=" + TRX_s + "&c=" + TRX_c + "&showme=" + TRX_showme + "&st=" + TRX_st + "&title=" + TRX_t;

  // adding logid if called by st='phpjs'
  if (jslogid == null) { var jslogid = 0; }
  else { r = r + "&jslogid=" + jslogid; }

  // $HTTP_REFERER problem with NS,...
  // Do it here before the TRXvars are added
  r = r+"&url="+escape(document.URL);

  // Send user defined values
  r = r + addPageValues();

 var d=new Image(1,1);d.src=TRXloc+r;
}

function LogClick (link)
{
  var r = (_trxacct) ? "?acct=" + _trxacct : "?id=" + _trxid;
  r += "&url=" + escape(link.href) + "&r=" + TRX_s + "&c=" + TRX_c + "&showme=" + TRX_showme + "&st=" + TRX_st;

  // adding logid if called by st='phpjs'
  if (jslogid == null) { var jslogid = 0; }
  else { r = r + "&jslogid=" + jslogid; }

  // Send user defined values
  r = r + addPageValues();

  var bug = new Image();
  bug.src = TRXdlloc + r;
}

function LogClickURL (link)
{
  var r = (_trxacct) ? "?acct=" + _trxacct : "?id=" + _trxid;
  r += "&url=" + escape(link) + "&r=" + TRX_s + "&c=" + TRX_c + "&showme=" + TRX_showme + "&st=" + TRX_st;

  // adding logid if called by st='phpjs'
  if (jslogid == null) { var jslogid = 0; }
  else { r = r + "&jslogid=" + jslogid; }

  // Send user defined values
  r = r + addPageValues();

  var bug = new Image();
  bug.src = TRXdlloc + r;
}

function webTraxsLOR (url)
{
  if (isRobot()) { return; }

  var logtype = "int";
  if (typeof url === 'undefined') { url = ""; }

  // prepare data for logging
  r = "?acct=" + _trxacct + "&referer=" + TRX_f + "&r=" + TRX_s + "&c=" + TRX_c + "&showme=" + TRX_showme + "&st=" + TRX_st + "&title=" + TRX_t;

  // adding logid if called by st='phpjs'
  if (jslogid == null) { var jslogid = 0; }
  else { r = r + "&jslogid=" + jslogid; }

  if (url=="") { url = document.URL; }
  else { logtype = "ext"; }

  r = r+"&url="+escape(url);
  r = r+"&logtype="+logtype;

  // Send user defined values
  r = r + addPageValues();

  var d=new Image(1,1);
  d.src=LORloc+r;
}

function isRobot ()
{
  var re = new RegExp("(googlebot|bingbot)", 'i');
  return re.test(navigator.userAgent);
}

/* --> */

