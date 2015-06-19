
<?php 

$client = new SoapClient("http://61.177.141.230:8093/WsrAPIs/SyncAPI.asmx?wsdl");  
//设置传入参数
$params=array('arg0'=>'PD94bWwgdmVyc2lvbj0nMS4wJyBlbmNvZGluZz0ndXRmLTgnID8+PGNvbnRlbnQ+PHVpZD7nlKjmiLdpZDwvdWlkPjxkcml2ZV9pZD7orr7lpIdpZDwvZHJpdmVfaWQ+PGRhdGVfdGltZT4yMDE1LTA2LTAxPC9kYXRlX3RpbWU+PHB1bHNlX3ZhbHVlPjgwPC9wdWxzZV92YWx1ZT48ZXhhbV90eXBlPua1i+mHj+exu+WeizwvZXhhbV90eXBlPjxoaWdoX3ZhbHVlPjE2MDA8L2hpZ2hfdmFsdWU+PGxvd192YWx1ZT40MDwvbG93X3ZhbHVlPjxoYXZlbWVkPumHj+WJjeeUqOiNr+aDheWGtTwvaGF2ZW1lZD48dXNlcl9udW1iZXI+55So5oi357yW5Y+3PC91c2VyX251bWJlcj48dXBhbl9udW1iZXI+VeebmOe8luWPtzwvdXBhbl9udW1iZXI+PHVwYW5fZ3JvdXA+VeebmOe7hOWPtzwvdXBhbl9ncm91cD48SURfbnVtYmVyPjMyMDIyMjE5NTcwODIzNzI2MjwvSURfbnVtYmVyPjx0ZWxlcGhvbmU+55So5oi355S16K+d5Y+3PC90ZWxlcGhvbmU+PC9jb250ZW50Pg==');
//传入参数
$p = $client->SetXueya($params);

print_r($p);
?>