HOW TO SEND OPT-OUTS TO DoSomething.org

To send an opt-out to dosomething.org, you will send an HTTP POST
to http://www.dosomething.org/ds_mobile/optout. This POST request will have
two url encoded fields named data and sig.

The data field contains the definitions of three required variables: mobile,
uid, and time. mobile is the 10-digit mobile number (no non-digits) of the
user opting out. uid is the Do Something user ID of the user opting out. If
you do not have this data you MUST give a uid of 0. time is the current unix
time (seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)). Note that
if this time is more than 5 minutes faster or slower than our clock (which
is synced with ntpd), then the request will fail. These fields should be
expressed in the format of field=value and then joined with pipes (|). An
example of a valid data field would be:
mobile=2122222212|uid=1|time=1199489112

The sig field contains a base64 encoded HMAC-SHA1 hash created with a key (the
sha1 of a secret code that will be provided by DoSomething and a message (the
data field explained above). I know that sentence was hard to understand, so
here is example pseudocode for creating a sig:
sig = base64_encode(hmac_sha1(sha1("secret"), data))
where hmac_sha1 is a function defined by hmacsha1(key, message).

These two fields then have to be url encoded and sent via post. On success,
our server will simply send an HTTP response with the text "success" (with no
quotes). On failure, the server will send and HTTP response with the text
"failure: " (no quotes) and the reason the request failed.

Here is an example of a successfull HTTP request and response:

Request:
POST /ds_mobile/optout HTTP/1.0
Host: www.dosomething.org
User-Agent: Drupal (+http://drupal.org/)
Content-Length: 119
Content-Type: application/x-www-form-urlencoded

data=mobile%3D2122222212%7Cuid%3D1%7Ctime%3D1199489112&sig=MDVhYmM5MzM3ZGQ3MWI3Y2M2MmFkNjAxNDE0OWJiMjBlMjhmM2MzYg%3D%3D

Response:
success

