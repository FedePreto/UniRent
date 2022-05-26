@extends('layouts.public')

@section('title', 'HomePage')

@section('content')
<div class="w3-container w3-padding-32" id="catalog">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>Catalogo </b></h3>
    <div style = "zoom:.3;-o-transform: scale(.3);-moz-transform: scale(.3);">
    <img src="{{asset('img/italia.png')}}" class="map" usemap="#image-map">
    <map name="image-map">
        <area target="" alt="Valle d'Aosta" title="Valle d'Aosta" href="{{route('catalogo_regionale',['Valle d\'Aosta'])}}" coords="38,271,62,271,100,260,132,252,159,250,178,268,186,297,176,318,146,307,100,326,70,329,62,297,46,286" shape="poly">
        <area target="" alt="Piemonte" title="Piemonte" href="{{route('catalogo_regionale',['Piemonte'])}}" coords="189,251,205,245,221,224,238,199,243,170,262,153,259,180,265,194,278,205,297,232,275,253,275,291,297,329,300,351,275,359,270,394,275,421,297,442,332,445,367,496,362,513,332,499,321,515,297,510,275,523,254,526,224,534,213,561,194,583,200,599,173,610,146,602,103,610,59,585,59,556,46,531,70,507,62,459,27,448,16,418,49,413,81,396,92,348,135,324,178,329,203,305,197,272" shape="poly">
        <area target="" alt="Lombardia" title="Lombardia" href="{{route('catalogo_regionale',['Lombardia'])}}" coords="294,391,300,423,335,415,359,453,384,488,384,437,413,405,446,402,481,402,505,415,551,432,578,437,602,421,629,437,670,434,575,364,575,297,594,272,556,288,543,232,559,178,551,140,567,140,516,116,502,132,519,153,516,194,483,197,475,164,446,178,421,180,394,140,389,183,373,213,362,240,367,259,343,280,324,259,313,215,297,253,297,283,335,361" shape="poly">
        <area target="" alt="Trentino-Alto Adige" title="Trentino-Alto Adige" href="{{route('catalogo_regionale',['Trentino-Alto Adige'])}}" coords="562,77,578,59,592,69,616,77,649,75,659,40,746,32,775,13,819,77,797,88,778,77,759,107,738,126,740,158,759,185,721,204,727,229,691,221,673,240,651,278,624,288,602,253,570,256,581,153,559,110" shape="poly">
        <area target="" alt="Friuli-Venezia Giulia" title="Friuli-Venezia Giulia" href="{{route('catalogo_regionale',['Friuli-Venezia Giulia'])}}" coords="876,94,870,129,827,170,849,197,841,226,868,253,919,245,933,275,987,275,978,253,1041,286,987,243,997,232,970,213,976,188,995,183,956,159,975,132,1007,116" shape="poly">
        <area target="" alt="Veneto" title="Veneto" href="{{route('catalogo_regionale',['Veneto'])}}" coords="592,318,608,369,713,442,797,434,838,440,840,459,856,437,821,394,838,340,927,291,913,264,854,272,827,232,829,191,811,170,862,105,832,99,792,102,765,124,759,167,772,186,745,232,683,256,646,307,602,297" shape="poly">
        <area target="" alt="Liguria" title="Liguria" href="{{route('catalogo_regionale',['Liguria'])}}" coords="124,677,170,623,208,623,224,577,248,545,278,537,308,540,332,534,346,510,362,529,394,531,411,545,413,564,438,558,456,585,475,599,502,629,459,623,438,599,411,583,378,569,357,558,330,561,300,567,259,591,240,610,221,634,213,658,162,685,143,677" shape="poly">
        <area target="" alt="Emilia-Romagna" title="Emilia-Romagna" href="{{route('catalogo_regionale',['Emilia-Romagna'])}}" coords="394,510,408,456,405,431,454,429,492,434,521,447,570,458,646,459,705,461,808,445,824,569,859,618,891,639,870,645,826,655,813,672,762,661,756,628,754,604,708,577,654,604,573,594,478,537,438,550" shape="poly">
        <area target="" alt="Toscana" title="Toscana" href="{{route('catalogo_regionale',['Toscana'])}}" coords="462,564,513,631,578,793,575,853,619,858,621,883,689,947,673,966,713,955,729,942,759,910,756,874,786,837,783,796,799,772,786,745,826,691,781,688,729,653,732,621,694,610,673,631,578,623,500,572" shape="poly">
        <area target="" alt="Marche" title="Marche" href="{{route('catalogo_regionale',['Marche'])}}" coords="856,669,848,696,864,723,902,734,924,756,935,818,978,856,1010,883,1078,837,1021,718,948,675,913,650,899,672,878,669" shape="poly">
        <area target="" alt="Umbria" title="Umbria" href="{{route('catalogo_regionale',['Umbria'])}}" coords="825,723,816,756,837,783,794,815,799,880,802,896,837,901,883,955,967,891,956,864,918,837,899,761" shape="poly">
        <area target="" alt="Lazio" title="Lazio" href="{{route('catalogo_regionale',['Lazio'])}}" coords="735,966,786,1028,843,1066,905,1142,975,1182,1088,1177,1088,1139,1102,1104,1067,1082,1010,1080,994,1053,962,1039,948,1009,967,988,991,996,964,945,972,912,989,901,953,920,924,934,905,961,864,966,837,942,808,912,783,901,756,934" shape="poly">
        <area target="" alt="Abruzzo" title="Abruzzo" href="{{route('catalogo_regionale',['Abruzzo'])}}" coords="967,1020,1024,1053,1048,1063,1086,1069,1118,1085,1129,1045,1156,1036,1188,1058,1207,1015,1205,991,1091,899,1080,850,1021,891,1021,920,986,923,991,955,1005,977,1018,999,999,1012" shape="poly">
        <area target="" alt="Molise" title="Molise" href="{{route('catalogo_regionale',['Molise'])}}" coords="1124,1144,1118,1096,1151,1079,1148,1058,1172,1058,1191,1082,1232,1017,1269,1033,1275,1074,1248,1087,1248,1106,1259,1125,1229,1125,1205,1141,1145,1120" shape="poly">
        <area target="" alt="Campania" title="Campania" href="{{route('catalogo_regionale',['Campania'])}}" coords="1097,1193,1105,1158,1126,1161,1145,1144,1183,1155,1226,1161,1267,1144,1286,1166,1305,1185,1307,1204,1348,1209,1353,1234,1323,1247,1329,1269,1345,1293,1359,1317,1402,1371,1386,1404,1350,1417,1321,1396,1280,1377,1294,1333,1261,1285,1226,1285,1199,1301,1205,1269,1164,1258,1132,1261" shape="poly">
        <area target="" alt="Puglia" title="Puglia" href="{{route('catalogo_regionale',['Puglia'])}}" coords="1281,1120,1272,1101,1299,1080,1291,1034,1424,1028,1437,1053,1397,1085,1416,1131,1621,1204,1748,1271,1823,1325,1823,1417,1777,1398,1748,1325,1645,1320,1607,1288,1564,1312,1548,1247,1499,1258,1464,1215,1434,1217,1434,1185,1364,1190,1321,1185,1318,1158,1294,1144,1283,1134" shape="poly">
        <area target="" alt="Calabria" title="Calabria" href="{{route('catalogo_regionale',['Calabria'])}}" coords="1431,1838,1426,1795,1442,1776,1467,1714,1450,1698,1512,1671,1494,1606,1415,1439,1501,1442,1523,1398,1539,1409,1523,1450,1534,1482,1631,1525,1647,1614,1593,1620,1550,1647,1558,1733,1512,1766,1485,1836" shape="poly">
        <area target="" alt="Basilicata" title="Basilicata" href="{{route('catalogo_regionale',['Basilicata'])}}" coords="1398,1417,1420,1352,1358,1290,1342,1255,1374,1225,1371,1201,1409,1198,1423,1209,1428,1225,1496,1274,1525,1263,1542,1276,1547,1309,1560,1330,1550,1374,1512,1368,1498,1422,1466,1422,1458,1401" shape="poly">
        <area target="" alt="Sicilia" title="Sicilia" href="{{route('catalogo_regionale',['Sicilia'])}}" coords="913,1917,926,1855,964,1849,988,1849,1048,1822,1102,1857,1169,1852,1299,1817,1364,1811,1404,1779,1350,1879,1334,1941,1342,1992,1369,2025,1342,2076,1350,2106,1261,2082,1207,2022,1134,2019,1069,1976,1010,1949" shape="poly">
        <area target="" alt="Sardegna" title="Sardegna" href="{{route('catalogo_regionale',['Sardegna'])}}" coords="230,1296,292,1290,381,1217,408,1231,421,1263,451,1290,459,1371,438,1409,451,1452,429,1628,375,1622,351,1625,327,1676,292,1674,257,1631,267,1520,281,1479,259,1469,281,1404,259,1374,230,1328" shape="poly">
    </map>
    </div>
   <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="{{asset('img/ancona-4601.jpg')}}" style="width:100%">
            <div class="text">Caption Text</div>
        </div>
        <div class="mySlides fade">
            <img src="{{asset('img/sfondo_tagliato.png')}}" style="width:100%">
            <div class="text">Caption Two</div>
        </div>
        <div class="mySlides fade">
            <img src="{{asset('img/evil_abed.jpg')}}" style="width:100%">
            <div class="text">Caption Three</div>
        </div>
        <br>
        <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        </div>    
</div>
@endsection
