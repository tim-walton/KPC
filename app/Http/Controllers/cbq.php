<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class cbq extends Controller
{
    function testCBQ()
    {
        $data = '
{"widget":[{"WeatherCity":"Daphne","WeatherCounty":"Baldwin","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles30425.jpg","population":{"population":"22396","year":"2013"},"listings":{"Daphne, AL":1283}},{"WeatherCity":"Fairhope","WeatherCounty":"Baldwin","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles6753.jpg","population":{"population":"16100","year":"2013"},"listings":{"Fairhope, AL":1527}},{"WeatherCity":"Bay Minette","WeatherCounty":"Baldwin","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles30408.jpg","population":{"population":"8495","year":"2013"},"listings":{"Bay Minette, AL":316}},{"WeatherCity":"Foley","WeatherCounty":"Baldwin","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.7","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles5112.jpg","population":{"population":"15019","year":"2013"},"listings":{"Foley, AL":1050}},{"WeatherCity":"Gulf Shores","WeatherCounty":"Baldwin","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.7","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles32352.jpg","population":{"population":"10222","year":"2013"},"listings":{"Gulf Shores, AL":1952}},{"WeatherCity":"Atmore","WeatherCounty":"Escambia","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles17820.jpg","population":{"population":"10139","year":"2013"},"listings":{"Atmore, AL":527}},{"WeatherCity":"Saraland","WeatherCounty":"Mobile","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles75371.jpg","population":{"population":"13582","year":"2013"},"listings":{"Saraland, AL":84}},{"WeatherCity":"Prichard","WeatherCounty":"Mobile","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.6","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles46407.jpg","population":{"population":"22596","year":"2013"},"listings":{"Prichard, AL":50}},{"WeatherCity":"Tillmans Corner","WeatherCounty":"Mobile","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.6","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"18717","year":"2013"},"listings":[]},{"WeatherCity":"Mobile","WeatherCounty":"Mobile","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"5.5","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles6730.jpg","population":{"population":"195116","year":"2013"},"listings":{"Mobile, AL":2092}},{"WeatherCity":"Fort Payne","WeatherCounty":"DeKalb","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.7","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles4456.jpg","population":{"population":"14108","year":"2013"},"listings":{"Fort Payne, AL":12}},{"WeatherCity":"Greenville","WeatherCounty":"Butler","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.7","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles30402.jpg","population":{"population":"8003","year":"2013"},"listings":{"Greenville, AL":167}},{"WeatherCity":"Jasper","WeatherCounty":"Walker","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles24685.jpg","population":{"population":"14295","year":"2013"},"listings":{"Jasper, AL":846}},{"WeatherCity":"Alabaster","WeatherCounty":"Shelby","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles63999.jpg","population":{"population":"30719","year":"2013"},"listings":{"Alabaster, AL":357}},{"WeatherCity":"Helena","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles86002.jpg","population":{"population":"16956","year":"2013"},"listings":{"Helena, AL":339}},{"WeatherCity":"Russellville","WeatherCounty":"Franklin","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles44247.jpg","population":{"population":"9814","year":"2013"},"listings":{"Russellville, AL":133}},{"WeatherCity":"Chelsea","WeatherCounty":"Shelby","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles22210.jpg","population":{"population":"10612","year":"2013"},"listings":{"Chelsea, AL":281}},{"WeatherCity":"Calera","WeatherCounty":"Shelby","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles36670.jpg","population":{"population":"12054","year":"2013"},"listings":{"Calera, AL":382}},{"WeatherCity":"Pelham","WeatherCounty":"Shelby","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles85999.jpg","population":{"population":"21701","year":"2013"},"listings":{"Pelham, AL":426}},{"WeatherCity":"Bessemer","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.6","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles90144.jpg","population":{"population":"27336","year":"2013"},"listings":{"Bessemer, AL":551}},{"WeatherCity":"Huntsville","WeatherCounty":"Madison","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles26984.jpg","population":{"population":"182317","year":"2013"},"listings":{"Huntsville, AL":395}},{"WeatherCity":"Muscle Shoals","WeatherCounty":"Colbert","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"13286","year":"2013"},"listings":{"Muscle Shoals, AL":97}},{"WeatherCity":"Phenix City","WeatherCounty":"Lee","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"34737","year":"2013"},"listings":{"Phenix City, AL":1488}},{"WeatherCity":"Madison","WeatherCounty":"Madison","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles23558.jpg","population":{"population":"44044","year":"2013"},"listings":{"Madison, AL":161}},{"WeatherCity":"Tuskegee","WeatherCounty":"Macon","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles18525.jpg","population":{"population":"9556","year":"2013"},"listings":{"Tuskegee, AL":71}},{"WeatherCity":"Opelika","WeatherCounty":"Lee","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles31978.jpg","population":{"population":"27381","year":"2013"},"listings":{"Opelika, AL":707}},{"WeatherCity":"Auburn","WeatherCounty":"Lee","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles31625.jpg","population":{"population":"55404","year":"2013"},"listings":{"Auburn, AL":1189}},{"WeatherCity":"Sylacauga","WeatherCounty":"Talladega","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.4","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles2856.jpg","population":{"population":"12775","year":"2013"},"listings":{"Sylacauga, AL":276}},{"WeatherCity":"Jacksonville","WeatherCounty":"Calhoun","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles92224.jpg","population":{"population":"12475","year":"2013"},"listings":{"Jacksonville, AL":352}},{"WeatherCity":"Saks","WeatherCounty":"Calhoun","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"10488","year":"2013"},"listings":[]},{"WeatherCity":"Northport","WeatherCounty":"Tuscaloosa","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"23780","year":"2013"},"listings":{"Northport, AL":30}},{"WeatherCity":"Anniston","WeatherCounty":"Calhoun","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles1624.jpg","population":{"population":"22947","year":"2013"},"listings":{"Anniston, AL":891}},{"WeatherCity":"Oxford","WeatherCounty":"Calhoun","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles43917.jpg","population":{"population":"21287","year":"2013"},"listings":{"Oxford, AL":411}},{"WeatherCity":"Valley","WeatherCounty":"Chambers","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles47811.jpg","population":{"population":"9469","year":"2013"},"listings":{"Valley, AL":252}},{"WeatherCity":"Tuscaloosa","WeatherCounty":"Tuscaloosa","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.3","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles32471.jpg","population":{"population":"92461","year":"2013"},"listings":{"Tuscaloosa, AL":83}},{"WeatherCity":"Vestavia Hills","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles30432.jpg","population":{"population":"33993","year":"2013"},"listings":{"Vestavia Hills, AL":380}},{"WeatherCity":"Tuscumbia","WeatherCounty":"Colbert","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"8549","year":"2013"},"listings":{"Tuscumbia, AL":92}},{"WeatherCity":"Florence","WeatherCounty":"Lauderdale","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpic1\/1files233.jpg","population":{"population":"39530","year":"2013"},"listings":{"Florence, AL":310}},{"WeatherCity":"Clay","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"9699","year":"2013"},"listings":{"Clay, AL":54}},{"WeatherCity":"Fairfield","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles28124.jpg","population":{"population":"11071","year":"2013"},"listings":{"Fairfield, AL":69}},{"WeatherCity":"Irondale","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles9888.jpg","population":{"population":"12342","year":"2013"},"listings":{"Irondale, AL":135}},{"WeatherCity":"Moody","WeatherCounty":"St. Clair","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles59251.jpg","population":{"population":"11976","year":"2013"},"listings":{"Moody, AL":204}},{"WeatherCity":"Pell City","WeatherCounty":"St. Clair","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles83208.jpg","population":{"population":"12940","year":"2013"},"listings":{"Pell City, AL":528}},{"WeatherCity":"Sheffield","WeatherCounty":"Colbert","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"9046","year":"2013"},"listings":{"Sheffield, AL":63}},{"WeatherCity":"Rainbow City","WeatherCounty":"Etowah","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"9612","year":"2013"},"listings":{"Rainbow City, AL":15}},{"WeatherCity":"Clanton","WeatherCounty":"Chilton","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles23945.jpg","population":{"population":"8674","year":"2013"},"listings":{"Clanton, AL":177}},{"WeatherCity":"Mountain Brook","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles24083.jpg","population":{"population":"20416","year":"2013"},"listings":{"Mountain Brook, AL":134}},{"WeatherCity":"Pleasant Grove","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"10193","year":"2013"},"listings":{"Pleasant Grove, AL":200}},{"WeatherCity":"Leeds","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles9408.jpg","population":{"population":"12269","year":"2013"},"listings":{"Leeds, AL":146}},{"WeatherCity":"Birmingham","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles32509.jpg","population":{"population":"212295","year":"2013"},"listings":{"Birmingham, AL":3266}},{"WeatherCity":"Trussville","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles33799.jpg","population":{"population":"19936","year":"2013"},"listings":{"Trussville, AL":594}},{"WeatherCity":"Center Point","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"16927","year":"2013"},"listings":{"Center Point, AL":181}},{"WeatherCity":"Southside","WeatherCounty":"Calhoun","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"8365","year":"2013"},"listings":{"Southside, AL":13}},{"WeatherCity":"Hueytown","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles63963.jpg","population":{"population":"16005","year":"2013"},"listings":{"Hueytown, AL":177}},{"WeatherCity":"Talladega","WeatherCounty":"Talladega","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.2","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles31612.jpg","population":{"population":"15966","year":"2013"},"listings":{"Talladega, AL":315}},{"WeatherCity":"Homewood","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.1","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles29736.jpg","population":{"population":"25288","year":"2013"},"listings":{"Homewood, AL":252}},{"WeatherCity":"Hoover","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.1","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles30428.jpg","population":{"population":"82264","year":"2013"},"listings":{"Hoover, AL":1159}},{"WeatherCity":"Meadowbrook","WeatherCounty":"Shelby","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.1","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"8787","year":"2013"},"listings":[]},{"WeatherCity":"Gadsden","WeatherCounty":"Etowah","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.0","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles41443.jpg","population":{"population":"36794","year":"2013"},"listings":{"Gadsden, AL":75}},{"WeatherCity":"Fultondale","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.0","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"8477","year":"2013"},"listings":{"Fultondale, AL":164}},{"WeatherCity":"Boaz","WeatherCounty":"Etowah","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.0","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles76073.jpg","population":{"population":"9661","year":"2013"},"listings":{"Boaz, AL":10}},{"WeatherCity":"Gardendale","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.0","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"13779","year":"2013"},"listings":{"Gardendale, AL":258}},{"WeatherCity":"Forestdale","WeatherCounty":"Jefferson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"4.0","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"10688","year":"2013"},"listings":{"Forestdale, AL":19}},{"WeatherCity":"Eufaula","WeatherCounty":"Barbour","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles19463.jpg","population":{"population":"13038","year":"2013"},"listings":{"Eufaula, AL":383}},{"WeatherCity":"Enterprise","WeatherCounty":"Dale","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles46232.jpg","population":{"population":"27092","year":"2013"},"listings":{"Enterprise, AL":446}},{"WeatherCity":"Millbrook","WeatherCounty":"Elmore","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles37796.jpg","population":{"population":"14714","year":"2013"},"listings":{"Millbrook, AL":303}},{"WeatherCity":"Scottsboro","WeatherCounty":"Jackson","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles48805.jpg","population":{"population":"14825","year":"2013"},"listings":[]},{"WeatherCity":"Alexander City","WeatherCounty":"Tallapoosa","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles46158.jpg","population":{"population":"14864","year":"2013"},"listings":{"Alexander City, AL":146}},{"WeatherCity":"Prattville","WeatherCounty":"Elmore","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles45296.jpg","population":{"population":"33983","year":"2013"},"listings":{"Prattville, AL":652}},{"WeatherCity":"Ozark","WeatherCounty":"Dale","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.9","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles49604.jpg","population":{"population":"14879","year":"2013"},"listings":{"Ozark, AL":237}},{"WeatherCity":"Troy","WeatherCounty":"Pike","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.8","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles46414.jpg","population":{"population":"18289","year":"2013"},"listings":{"Troy, AL":378}},{"WeatherCity":"Selma","WeatherCounty":"Dallas","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.7","img":"http:\/\/pics4.city-data.com\/cpicc\/cfiles19171.jpg","population":{"population":"20391","year":"2013"},"listings":{"Selma, AL":18}},{"WeatherCity":"Dothan","WeatherCounty":"Houston","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.7","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles41916.jpg","population":{"population":"66972","year":"2013"},"listings":{"Dothan, AL":1947}},{"WeatherCity":"Hartselle","WeatherCounty":"Morgan","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.5","img":"http:\/\/apireal.synapsys.us\/city-image\/images\/placeholder-location.jpg","population":{"population":"14361","year":"2013"},"listings":{"Hartselle, AL":10}},{"WeatherCity":"Athens","WeatherCounty":"Limestone","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.5","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles21410.jpg","population":{"population":"22789","year":"2013"},"listings":{"Athens, AL":48}},{"WeatherCity":"Decatur","WeatherCounty":"Morgan","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.5","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles40579.jpg","population":{"population":"55776","year":"2013"},"listings":{"Decatur, AL":40}},{"WeatherCity":"Montgomery","WeatherCounty":"Montgomery","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"3.5","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles21707.jpg","population":{"population":"204760","year":"2013"},"listings":{"Montgomery, AL":2772}},{"WeatherCity":"Andalusia","WeatherCounty":"Covington","WeatherState":"AL","WeatherYear":"2014","WeatherPercipication":"2.0","img":"http:\/\/pics4.city-data.com\/cpicv\/vfiles18108.jpg","population":{"population":"9051","year":"2013"},"listings":{"Andalusia, AL":27}}]}';
        exit($data);
    }
}
