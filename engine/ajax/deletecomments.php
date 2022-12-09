<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 https://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2022 SoftNews Media Group
-----------------------------------------------------
 You use Demo Version of DataLife Engine
=====================================================
*/
?><?php $_F=__FILE__;$_X='P0pnP2l3aTlBKjlSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUjkgcnhleF1HWmEgdDZIRzZhIC0gCk0gZGZaZXZhPUQgamFXR3ggTHNmUWkgOS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tOSB3ZWVpOkFBV25hLTZhPUR6c1FBOS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tOSAzZmlNc0dId2UgKEUpIFRra1YtVGtUVCBkZlpldmE9RCBqYVdHeCBMc2ZRaTlSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUjkgQndHRCBFZldhIEdEIGlzZmVhRWVhVyAKTSBFZmlNc0dId2U5UlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlI5IDRHbmE6IFdhbmFlYUVmWVlhNmVEeml3aTktLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLTkgVURhOiBFZllZYTZlRCBXYW5hZWE5UlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlJSUlI5KkE5OUdaKCFXYVpHNmFXKCdyMUIxXTA0dHR2TDB2dCcpKSBwOQl3YXhXYXMoICJsQkI8QU96TyBWay4gNGZzCkdXV2E2IiApOzkJd2F4V2FzICggJ11mRXhlR2Y2OiB6ekF6ekEnICk7OQlXR2EoICJseEViRzZIIHhlZWFZaWUhIiApOzk4OQk5R1ooICEkR0RfbmZISGFXICkgV0dhKCAiYXNzZnMiICk7OTkkR1cgUiBHNmU3eG4oICRfY3Q+VXRkQksnR1cndSApOzk5R1ooICEgJEdXICkgV0dhKCAiYXNzZnMiICk7OTkkc2Y9IFIgJFcKLUpEUWlhc195UWFzTSggImR0XXQzQiBHVywgaWZEZV9HVywgUURhc19HVywgV3hlYSwgR0Rfc2FIR0RlYXMgNGNDaiAiIHogPGN0NDBYIHogIl9FZllZYTZlRCBxbHRjdCBHVyBSICdwJEdXOCciICk7OTlHWiAoJHNmPUsnR1cndSkJcDk5CSR3eDdhX2lhc1kgUiBaeG5EYTs5CSRzZj1LJ1d4ZWEndSBSIERlc2VmZUdZYSggJHNmPUsnV3hlYSd1ICk7OTkJR1ooICRfTHRCSydXbmFfeG5uZj1fd3hEdyd1ICFSICIiIDF2ciAkX0x0QksnV25hX3hubmY9X3d4RHcndSBSUiAkV25hX25mSEc2X3d4RHcgMXZyICgoJFlhWQphc19HV0snUURhc19HVyd1IFJSICRzZj1LJ1FEYXNfR1cndSAxdnIgJHNmPUsnR0Rfc2FIR0RlYXMndSAxdnIgJFFEYXNfSHNmUWlLJFlhWQphc19HV0snUURhc19Ic2ZRaSd1dUsneG5uZj1fV2FuRSd1KSBDYyAkWWFZCmFzX0dXSydRRGFzX0hzZlFpJ3UgUlIgJ08nIENjICRRRGFzX0hzZlFpSyRZYVkKYXNfR1dLJ1FEYXNfSHNmUWkndXVLJ1dhbl94bm5FJ3UpICkgJHd4N2FfaWFzWSBSIGVzUWE7OTkJR1ogKCAkUURhc19Ic2ZRaUskWWFZCmFzX0dXSydRRGFzX0hzZlFpJ3V1SydhV0dlX25HWUdlJ3UgMXZyICgoJHNmPUsnV3hlYSd1ICsgKCRRRGFzX0hzZlFpSyRZYVkKYXNfR1dLJ1FEYXNfSHNmUWkndXVLJ2FXR2VfbkdZR2UndSAqIDJrKSkgZyAkX0IwanQpICkgcDkJCSR3eDdhX2lhc1kgUiBaeG5EYTs5CTg5OQlHWiggJHd4N2FfaWFzWSApIHA5CTkJCVdhbmFlYUVmWVlhNmVEKCAkc2Y9SydHVyd1ICk7OTkJCUdaICggJEVmNlpHSEsneG5uZj1feG5lX1Fzbid1IDF2ciAhJEVmNlpHSEsnRGFmX2VNaWEndSApICRFaXNhWkd9IFIgIlpRbm5fIjsgYW5EYSAkRWlzYVpHfSBSICJaUW5uXyJ6JHNmPUsnaWZEZV9HVyd1Ozk5CQlFbmF4c19FeEV3YSggeHNzeE0oICc2YT1EXycsICdzREQnLCAnRWZZWV8neiRzZj1LJ2lmRGVfR1cndSwgJEVpc2FaR30gKSApOzkJCTkJCWFFd2YgJHNmPUsnR1cndTs5CTkJOCBhbkRhIFdHYSggImFzc2ZzIiApOzk5OCBhbkRhIFdHYSggImFzc2ZzIiApOzk/Sg==';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdGYmVhcTY1M0hdamlHeTxzQVtDb1EvMGRoLkVYCndPRGdScEtadT1WbWtKVWxNNDJZQnhOUEk+YyB7TFR9bld2MTdydHo5UzhmJywnVmt0ZVduOUNnTE1waXFQci96T0t1OElTNTNjWGJoMXM8PXtbZl13NGowPlVIeUY2bVRhWjdKUVIgWUcyeGxkTkF2REUuCkJ9bycpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>