var playerInstance = jwplayer("myElement")
playerInstance.setup({
    "file": "https://content.jwplatform.com/videos/1g8jjku3-cIp6U8lV.mp4",
    "image": "http://d3el35u4qe4frz.cloudfront.net/bkaovAYt-480.jpg",
    "advertising": {
        "client": "googima",
        "schedule": {
            "adBreak": {
                "tag": "//pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/137679306/HB_Dev_Center_Example&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&correlator=",
                "offset": "pre"
            }
        },
        "bids": {
            "settings": {
                "mediationLayerAdServer": "dfp",
                "floorPriceCents": 2,
                "floorPriceCurrency": "usd",
                "bidTimeout": 1000
            },
            "bidders": [
                {
                    "name": "SpotX",
                    "id": "85394"
                }
            ]
        }
    }
});