<?php
namespace UKCounties;

class Counties {
    /**
     * An array of the counties with ID defined for backwards compatibility and incase of any future changes so new addition don't change existing numbers
     * @var array An array of all of the UK counties
     */
    protected static $counties = array(
        // England
        1 => 'Bedfordshire',
        2 => 'Berkshire',
        3 => 'Bristol',
        4 => 'Buckinghamshire',
        5 => 'Cambridgeshire',
        6 => 'Cheshire',
        7 => 'City of London',
        8 => 'Cornwall',
        9 => 'Cumbria',
        10 => 'Derbyshire',
        11 => 'Devon',
        12 => 'Dorset',
        13 => 'Durham',
        14 => 'East Riding of Yorkshire',
        15 => 'East Sussex',
        16 => 'Essex',
        17 => 'Gloucestershire',
        18 => 'Greater London',
        19 => 'Greater Manchester',
        20 => 'Hampshire',
        21 => 'Herefordshire',
        22 => 'Hertfordshire',
        23 => 'Isle of Wight',
        24 => 'Kent',
        25 => 'Lancashire',
        26 => 'Leicestershire',
        27 => 'Lincolnshire',
        28 => 'Merseyside',
        29 => 'Norfolk',
        30 => 'North Yorkshire',
        31 => 'Northamptonshire',
        32 => 'Northumberland',
        33 => 'Nottinghamshire',
        34 => 'Oxfordshire',
        35 => 'Rutland',
        36 => 'Shropshire',
        37 => 'Somerset',
        38 => 'South Yorkshire',
        39 => 'Staffordshire',
        40 => 'Suffolk',
        41 => 'Surrey',
        42 => 'Tyne and Wear',
        43 => 'Warwickshire',
        44 => 'West Midlands',
        45 => 'West Sussex',
        46 => 'West Yorkshire',
        47 => 'Wiltshire',
        48 => 'Worcestershire',
        
        // Scotland    
        60 => 'Aberdeenshire',
        61 => 'Angus',
        62 => 'Argyll',
        63 => 'Ayrshire',
        64 => 'Banffshire',
        65 => 'Berwickshire',
        66 => 'Bute',
        67 => 'Caithness',
        68 => 'Clackmannanshire',
        69 => 'Cromartyshire',
        70 => 'Dumfriesshire',
        71 => 'Dunbartonshire',
        72 => 'East Lothian',
        73 => 'City of Edinburgh',
        74 => 'Fife',
        75 => 'Inverness-shire',
        76 => 'Kincardineshire',
        77 => 'Kinross-shire',
        78 => 'Kirkcudbrightshire',
        79 => 'Lanarkshire',
        80 => 'Midlothian',
        81 => 'Moray',
        82 => 'Nairnshire',
        83 => 'Orkney',
        84 => 'Peeblesshire',
        85 => 'Perthshire',
        86 => 'Renfrewshire',
        87 => 'Ross-shire',
        88 => 'Roxburghshire',
        89 => 'Selkirkshire',
        90 => 'Shetland',
        91 => 'Stirlingshire',
        92 => 'Sutherland',
        93 => 'West Lothian',
        94 => 'Wigtownshire',
        
        // Wales        
        110 => 'Blaenau Gwent',
        111 => 'Bridgend',
        112 => 'Caerphilly',
        113 => 'Cardiff',
        114 => 'Carmarthenshire',
        115 => 'Ceredigion',
        116 => 'Conwy',
        117 => 'Denbighshire',
        118 => 'Flintshire',
        119 => 'Gwynedd',
        120 => 'Isle of Anglesey',
        121 => 'Merthyr Tydfil',
        122 => 'Monmouthshire',
        123 => 'Neath Port Talbot',
        124 => 'Newport',
        125 => 'Pembrokeshire',
        126 => 'Powys',
        127 => 'Rhondda Cynon Taf',
        128 => 'Swansea',
        129 => 'Torfaen',
        130 => 'Vale of Glamorgan',
        131 => 'Wrexham',
        
        // Northern Ireland
        150 => 'Antrim',
        151 => 'Armagh',
        152 => 'Down',
        153 => 'Fermanagh',
        154 => 'Londonderry',
        155 => 'Tyrone',
    );

    /**
     * Get the counties in their current order
     * @return array This will be the list of counties
     */
    public static function getCounties(){
        return self::$counties;
    }
    
    /**
     * Return the counties listed in alphabetical order 
     * @return array This will be the list of counties
     */
    public static function getCountiesByName(){
        asort(self::$counties);
        return self::$counties;
    }
    
    /**
     * Returns the total number of counties
     * @return int The number of counties
     */
    public static function getNumberOfCounties(){
        return count(self::$counties);
    }

    /**
     * Returns the id of a given county name
     * @param string $county This should be the county name you wish to find the id for
     * @return int Returns the id of the given county name
     */
    public static function getCountyID($county){
        if(in_array($county, self::$counties)){
            $names = array_keys(self::$counties, $county);
            return $names[0];
        }
        return false;
    }
    
    /**
     * Returns the county name of a given county id
     * @param int $id This should be the id of the county you wish to know the name of
     * @return string Will return the county name of the id
     */
    public static function getCountyName($id){
        if(is_numeric($id) && array_key_exists(intval($id), self::$counties)){
            return self::$counties[intval($id)];
        }
        return false;
    }
}
