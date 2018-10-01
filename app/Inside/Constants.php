<?php

namespace App\Inside;

class Constants
{
    const IRANCELL = 0;
    const MCI = 1;

    const USERS_DB = 'users';
    const PASSWORD_RESETS_DB = 'password_resets';
    const CATEGORY_DB = 'category';
    const STATE_DB = 'state';
    const ADVERTISEMENT_DB = 'advertisement';
    const ADVERTISEMENT_GALLERY_DB = 'advertisement_gallery';
//    const TOKENS_DB = 'tokens';
//    const USERS_LOGIN_TOKEN_DB = 'users_login_token';
//    const USERS_LOGIN_TOKEN_LOG_DB = 'users_login_token_log';
//    const VIDEOS_DB = 'videos';
//    const USER_FOLLOW_DB = 'user_follow';
//    const WALLET_DB = 'wallet';
//    const INVOICES_DB = 'invoices';
//    const PRODUCTS_DB = 'products';
//    const VIDEOS_LIKE_DB = 'videos_like';
//    const VIDEOS_VIEW_DB = 'videos_view';
//    const VIDEOS_COMMENT_DB = 'videos_comment';
//    const TAGS_DB = 'tags';
//    const STAR_TYPE_APP_DB = 'star_type_app';
//    const VIDEOS_TYPE_APP_DB = 'videos_type_app';
//    const MARKETS_OAUTH_TOKEN_DB = 'markets_oauth_token';


//
//    const CLIENT_ID = 'yNAb4eNKq2DCTxpShg2ssWcIWxqwPBcbwJXcr08B';
//    const CLIENT_SECRET = 'L7ZIPGLQtd3rZvFvB2u37aDSCqlbMGdqTyq3ck564l4Od3rl0FxywS21r4xS';
//    const REDIRECT_URI = 'http://starsapp.ir/bazaar/oauth';
//
//    Const LOGIN_TYPE_SMS = "login_with_sms";
//    Const LOGIN_TYPE_CALL = "login_with_call";
//
//    const ANDROID_TYPE = 'android';
//    const IOS_TYPE = 'ios';
//    const WEB_TYPE = 'web';
//
//    const TYPE_APP_STARS = 'stars';
//    const TYPE_APP_STAGE = 'stage';
//    const TYPE_APP_SPORT = 'sport';
//
//    const IMG_TYPE_APP_STARS = 'stars.png';
//    const IMG_TYPE_APP_STAGE = 'stage.png';
//    const IMG_TYPE_APP_SPORT = 'sport.png';
//
//
//    const MARKET_CAFEBAZAAR = 'cafebazaar';
//    const MARKET_ZARINPAL = 'zarinpal';
//    const MARKET_IRANAPPS = 'iranapps';
//    const MARKET_CHARKHONEH = 'charkhoneh';
//    const MARKET_MYKET = 'myket';
//    const MARKET_GOOGLEPLAY = 'googleplay';
//
//
////    const STARS_DB = 'stars';
//    const MARKETS_DB = 'markets';
//
//    const FOLLOWED_STARS_DB = 'followed_stars';
//    const REACTION_DB = 'reactions';
//    const USERS_TRANSACTION_DB = 'user_transaction';
//    const SYNC_ORDER_RELATION_DB = 'sync_order_relation';
//    const SUBSCRIBERS_DB = 'subscribers';
//    const AMOUNT_CHARGING_DB = 'amount_charging';
//    const SMS_NOTIFY_DB = 'sms_notify';
//    const TRACK_IRANCELL_MONEY_DB = 'track_irancell_money';
//    const FOLLOWED_BY_IRANCELL_DB = 'followed_by_irancell';
//    const PANEL_DB = 'panel';
//    const TASKS_DB = 'tasks';
//    const CHECKOUT_DB = 'checkout';
//

//
//    const TELEGRAM_ADMINS = 'ai';
//    const TELEGRAM_CHANNELS = 'telegram_channels';

//
/////CHECKOUT
//exports.CHECKOUT_ID = 'uid';
//exports.CHECKOUT_STAR_ID = 'sid';
//exports.CHECKOUT_OPERATOR_ID = 'oid';
//exports.CHECKOUT_FROM = 'f';
//exports.CHECKOUT_TO = 't';
//exports.CHECKOUT_CREATED_AT = 'ca';
//exports.CHECKOUT_UPDATED_AT = 'ua';
//exports.CHECKOUT_IS_OPEN = 'o';
//exports.CHECKOUT_DESCRIPTION = 'd';
//
////Tasks
//exports.TASK_STAR_ID = 'i';
//exports.TASK_TITLE = 't';
//exports.TASK_CAPTION = 'd';
//exports.TASK_STATUS = 's';
//exports.TASK_ATACHMENT = 'a';
//exports.TASK_CREATED_AT = 'c';
//exports.TASK_UPDATED_AT = 'u';
//
//// STAR
//exports.STAR_NAME = 'n';
//exports.STAR_USERNAME = 'u';
//exports.STAR_IMAGE = 'i';
//exports.STAR_BIO = 'b';
//exports.STAR_FOLLOWED = 'fo';
//exports.STAR_ACCESS_REMAINING = 'ar';
//exports.STAR_ACTIVATED = 'a';
//exports.STAR_GENDER = 'g';
//exports.STAR_FOLLOWER_COUNT = 'f';
//exports.STAR_VIDEOS_COUNT = 'v';
//exports.STAR_IMAGES_COUNT = 'ic';
//exports.STAR_LAST_ACTIVITY = 'l';
//exports.STAR_TAGS = 't';
//exports.STAR_CATS = 'c';
//
//
//// VIDEO
//exports.VIDEO_PATH = 'f';
//exports.VIDEO_DESC = 'd';
//exports.VIDEO_ACTIVATED = 'a';
//exports.VIDEO_DURATION = 'du';
//exports.VIDEO_VIEW_COUNT = 'v';
//exports.VIDEO_LIKE_COUNT = 'l';
//exports.VIDEO_RATE = 'ra';
//exports.VIDEO_STARS = 's';
//exports.VIDEO_CREATED_AT = 'c';
//exports.VIDEO_PUBLISHED_AT = 'r';
//exports.VIDEO_IS_PAID = 'i';
//exports.VIDEO_IS_INTRO = 'ii';
//exports.VIDEO_POSTER = 'p';
//exports.VIDEO_TAGS = 't';
//exports.VIDEO_IS_VIDEO = 'iv';
//exports.VIDEO_SHARE_LINK = 'sl';
//
//// USER
//exports.USER_PHONE = 'p';
//exports.USER_TOKENS = 't';
//exports.USER_CONFIRMATION_CODE = 'c';
//exports.USER_NAME = 'n';
//exports.USER_MONEY = 'm';
//exports.USER_CREATED_AT = 'ca';
//exports.USER_UPDATED_AT = 'ua';
//exports.USER_EXPIRE_AT = 'e';
//exports.USER_TOKENS_UUID = 'u';
//exports.USER_TOKENS_TOKEN = 't';
//exports.USER_TOKENS_FCM = 'f';
//exports.USER_TOKENS_APNS = 'a';
//exports.USER_IS_VALID = 'i';
//exports.USER_CARRIER = 'uc';
//exports.USER_DAILY_PAYMENT = 'd';
//exports.USER_WALLET = 'w';
//exports.USER_WALLET_CREATED_AT = 'c';
//exports.USER_WALLET_EXPIRED_AT = 'e';
//exports.USER_WALLET_AMOUNT = 'p';
//exports.USER_WALLET_REAL = 'r';
//exports.USER_WALLET_PREPAID = 'p';
//exports.USER_WALLET_DEMAND = 'wd';
//exports.USER_IRANCELL_CREDIT = 'cir';
//
//// MARKET
//exports.MARKET_NAME = 'n';
//exports.MARKET_PLATFORM = 'p';
//exports.MARKET_IS_ACTIVATED = 'i';
//exports.MARKET_SHORT_CODE = 's';
//
//// Product
//exports.PRODUCT_MARKET_ID = 'm';
//exports.PRODUCT_NAME = 'n';
//exports.PRODUCT_SKU = 's';
//exports.PRODUCT_PRICE = 'p';
//exports.PRODUCT_AMOUNT = 'a';
//exports.PRODUCT_IS_ACTIVATED = 'i';
//
//// Invoice
//exports.INVOICE_USER_ID = 'u';
//exports.INVOICE_PRODUCT_ID = 'p';
//exports.INVOICE_IS_ACTIVATED = 'i';
//exports.INVOICE_PAYMENT_ID = 'pi';
//exports.INVOICE_PAYMENT_TOKEN = 'pt';
//exports.INVOICE_CREATED_AT = 'dc';
//exports.INVOICE_UPDATED_AT = 'du';
//
//// Reaction
//
//exports.REACTION_USER_ID = 'u';
//exports.REACTION_VIDEO_ID = 'v';
//exports.REACTION_TYPE = 'r';
//exports.REACTION_CREATED_AT = 'c';
//
//// SYNC_ORDER_RELATION => SOR
//exports.SOR_MOBILE_NUMBER = 'm';
//exports.SOR_UUID = 'u';
//exports.SOR_CONFIRMATION_CODE = 'c';
//exports.SOR_CREATED_AT = 'ca';
//
//// userTransaction
//exports.TRANSACTION_USER_ID = 'u';
//exports.TRANSACTION_STAR_ID = 's';
//exports.TRANSACTION_TYPE = 't';
//exports.TRANSACTION_AMOUNT = 'p';
//exports.TRANSACTION_DATE = 'e';
//exports.TRANSACTION_DESCRIPTION = 'd';
//exports.TRANSACTION_WALLET = 'w';
//
//
//// FollowedStar
//exports.FOLLOWED_STAR_ID = 's';
//exports.FOLLOWED_USER_ID = 'u';
//exports.FOLLOWED_EXPIRE_AT = 'e';
//exports.FOLLOWED_CREATED_AT = 'c';
//exports.FOLLOWED_PRICE = 'p';
//exports.FOLLOWED_TYPE = 't';
//
//
//// trackIrancellMoney TIM
//exports.TIM_PHONE = 'p';
//exports.TIM_AMOUNT = 'a';
//exports.TIM_RANGE = 'r';
//exports.TIM_TRY = 't';
//exports.TIM_UPDATED_AT = 'u';
//
//// followedByIrancell FBI
//exports.FBI_STAR_ID = 's';
//exports.FBI_USER_PHONE = 'p';
//exports.FBI_AMOUNT = 'a';
//exports.FBI_DATE = 'd';
//
//// Panel
//exports.PANEL_STAR_ID = 's';
//exports.PANEL_NICKNAME = 'n';
//exports.PANEL_AVATAR = 'a';
//exports.PANEL_USERNAME = 'u';
//exports.PANEL_PASSWORD = 'p';
//exports.PANEL_TYPE = 't';
//exports.PANEL_REMEMBER_TOKEN = 'r';
//exports.PANEL_LAST_ACTIVITY = 'l';
//
//// Error
//
//exports.ERROR_PAYMENT_REQUIRED = 0;
//exports.ERROR_PAYMENT_REQUIRED_MESSAGE = 'اعتبار شما کافی نیست';
//
//exports.ERROR_DEPT = 1;
//exports.ERROR_DEPT_MESSAGE = 'بدهی شما بیش از حد مجاز است.نسبت به شارژ حساب خود از سایر حساب ها اقدام نمایید';
//
//exports.ERROR_FOLLOW = 2;
//exports.ERROR_FOLLOW_MESSAGE = 'شما باید ابتدا هنرمند را فالو کنید';
//
//
//exports.IS_IRANCELL = 0;
//exports.IS_MCI = 1;
//exports.DIRECT = 2;
//
//
//exports.ROUTER_EXCHANGE = 'stars.router';
//exports.VERIFY_EXCHANGE = 'stars.verify';
//exports.VERIFY_QUEUE = 'stars.irancellSyncOrderRelation';
//exports.PAYMENT_EXCHANGE = 'stars.payment';
//exports.PAYMENT_QUEUE = 'stars.irancellAmountCharge';
//exports.PAYMENT_RESPONSE_EXCHANGE = 'stars.irancellAmountChargeResponse';
//exports.PAYMENT_RESPONSE_QUEUE = 'stars.irancellAmountChargeResponse';
//
//exports.SAVE = 1;
//exports.SPEND = 0;
//
//exports.FOLLOW_DIRECT = 0;
//exports.FOLLOW_STAGE = 2;
//exports.FOLLOW_AUTO_CHARGE = 1;
//
//
//exports.USER_NOT_FOUND = 0;
//exports.INVALID_USER = 1;
//
//exports.ROUTER_EXCHANGE = 'stars.router';
//exports.VERIFY_EXCHANGE = 'stars.verify';
//exports.VERIFY_QUEUE = 'stars.irancellSyncOrderRelation';
//exports.PAYMENT_EXCHANGE = 'stars.payment';
//exports.PAYMENT_QUEUE = 'stars.irancellAmountCharge';
//exports.PAYMENT_RESPONSE_EXCHANGE = 'stars.irancellAmountChargeResponse';
//exports.PAYMENT_RESPONSE_QUEUE = 'stars.irancellAmountChargeResponse';
//
//exports.RABBIT_SMS_NOTIFY_EXCHANGE = 'stars.smsNotify';
//exports.RABBIT_SMS_NOTIFY_QUEUE = 'stars.smsNotify';
//exports.RABBIT_SMS_EXCHANGE = 'stars.smsCenter';
//exports.RABBIT_SMS_QUEUE = 'stars.smsCenter';
//
//let smsAgent = new Map();
//smsAgent.set('8y1pvrb9ygzl57x', itemGenerator(10, 'استارز'));
//smsAgent.set('d569kbpeegze3mx', itemGenerator(100, 'استارز'));
//smsAgent.set('6yx9rgvzvq5dv81', itemGenerator(101, 'امیر مهدی ژوله', 'http://starsapp.ir/static/media/58ca916a08667d19f5209047/images/avatar/AgADBAAD7qgxG4SAYVJs77YN4H2JwZ2GnhkABHcFcew8GnF4QGsCAAEC__w:449__h:800.jpg', '58ca916a08667d19f5209047'));
//smsAgent.set('zlk8dbnw6bp6r94', itemGenerator(102, 'هادی کاظمی', 'http://starsapp.ir/static/media/58ca945308667d19f520904d/images/avatar/AgADBAAD7qcxG4SAWVLPXj9Clt2w0hWkZBkABNZnC_Ch_ZXeW-sDAAEC__w:640__h:640.jpg', '58ca945308667d19f520904d'));
//smsAgent.set('y3pn2bjxlqvdok8', itemGenerator(103, 'محمد نادری', 'http://starsapp.ir/static/media/58c930b308667d19f5209037/images/avatar/AgADBAADq6cxG4IoWFK7zEaZ_n-rDbiamxkABG3qvfFFRt-HnmQCAAEC__w:640__h:640.jpg', '58c930b308667d19f5209037'));
//smsAgent.set('y4j32qkxmbmnl71', itemGenerator(104, 'امیر کربلایی زاده', 'http://starsapp.ir/static/media/58aea77c08667d19f5208f55/images/avatar/AgADBAADracxG4IoWFI_wZVK2n4DarJUnhkABIv1rawEK-DTcGUCAAEC__w:640__h:640.jpg', '58aea77c08667d19f5208f55'));
//smsAgent.set('vkdo5bewlbx17z3', itemGenerator(105, 'هومن حاجی عبداللهی', 'http://starsapp.ir/static/media/58ca91aa08667d19f5209049/images/avatar/AgADBAAD6qcxG4SAWVLQuuzVOkS6-V24nBkABH710lcecjmUtGUCAAEC__w:640__h:640.jpg', '58ca91aa08667d19f5209049'));
//smsAgent.set('y7rw8b71yb2dxn3', itemGenerator(106, 'بیژن بنفشه خواه'));
//smsAgent.set('dw7o2bol1brl4jz', itemGenerator(107, 'رضا شفیعی جم', 'http://starsapp.ir/static/media/58f5995bcf0d5424e1be4c8b/images/avatar/AgADBAADs6cxGyc6sFO2VgmrN7utbyRgmxkABG33NsUbQPSmV3kDAAEC__w:800__h:800.jpg', '58f5995bcf0d5424e1be4c8b'));
//smsAgent.set('x1l6dbznybpnr75', itemGenerator(108, 'امیر نوری', 'http://starsapp.ir/static/media/58ca91b908667d19f520904c/images/avatar/AgADBAAD76cxG4SAWVKwEuJZDWkrOZQFYBkABKBKeFZnyXHaLPEDAAEC__w:533__h:800.jpg', '58ca91b908667d19f520904c'));
//smsAgent.set('jvkpdb191qnxy14', itemGenerator(109, 'علی مشهدی', 'http://starsapp.ir/static/media/58ca91a408667d19f5209048/images/avatar/AgADBAADt6cxG4IoWFJbyUdoRTMBHqTTnxkABDM_UBNuF_cm9GQCAAEC__w:640__h:640.jpg', '58ca91a408667d19f5209048'));
//smsAgent.set('y1pvrb9vwgzl57x', itemGenerator(110, 'مهران غفوریان', 'http://starsapp.ir/static/media/58aea77c08667d19f5208f57/images/avatar/AgADBAADlKgxG4SAWVK-0gP3Eii1KuqZZBkABBspYKbCxn5gb-YDAAEC__w:532__h:800.jpg', '58aea77c08667d19f5208f57'));
//smsAgent.set('2omzxq4ldgr14wj', itemGenerator(111, 'علی صادقی', 'http://starsapp.ir/static/media/58ca91b408667d19f520904b/images/avatar/AgADBAADBakxG4SAYVIecDBUN1DNJ7elWBkABBrVI17K033l8y8BAAEC__w:450__h:800.jpg', '58ca91b408667d19f520904b'));
//smsAgent.set('p2d9kgww2gonlz7', itemGenerator(112, 'سپند امیر سلیمانی'));
//smsAgent.set('rd2e8gr9lg5zjlv', itemGenerator(114, 'فریبا نادری', 'http://starsapp.ir/static/media/591163cecf0d5424e1be5922/images/avatar/AgADBAAD1KgxG1MliVB2O4g9YwbPRgedmxkABMD7LidQNbsxXwoEAAEC__w:512__h:512_1494312240957.jpg', '591163cecf0d5424e1be5922'));
//smsAgent.set('z612vq35jg35py4', itemGenerator(115, 'زیبا بروفه'));
//smsAgent.set('893vebxpzgozjk6', itemGenerator(116, 'جواد رضویان'));
//
//smsAgent.set('el9mdbd3vqnrvp4', itemGenerator(118, 'امیر تتلو'));
//smsAgent.set('kym9pgyvwg5n4lj', itemGenerator(119, 'آرمین 2AFM'));
//smsAgent.set('elzrnqmnjb9yk12', itemGenerator(120, 'نیما شعبان نژاد'));
//smsAgent.set('z6d1vg253gn7p35', itemGenerator(121, 'محراب قاسمخانی'));
//smsAgent.set('672xwb6wpq9dy8n', itemGenerator(122, 'پوریا پور سرخ'));
//smsAgent.set('d569kbp72dbze3m', itemGenerator(1000, 'کلیک گیر', 'http://starsapp.ir/web/etc/images/trade_aware-icon-150x150.png'));
//smsAgent.set('d569kbpn9vgze3m', itemGenerator(2000, 'عدد', 'http://starsapp.ir/web/etc/images/adad.png'));
//smsAgent.set('d569kbpwwxgze3m', itemGenerator(3000, 'تبلیغات آنلاین'));
//
//
////SPORT
//smsAgent.set('pryxkgl9xgj2e3m', itemGenerator(151, 'موسی اسماعیلی'));
//
////STAEG
//smsAgent.set('pryxkgl9xgj2e3m', itemGenerator(201, 'کامران رسول زاده'));
//
//
//let starAgent = new Map();
//starAgent.set('58ca916a08667d19f5209047', itemGenerator(101, 'امیر مهدی ژوله', 'http://starsapp.ir/static/media/58ca916a08667d19f5209047/images/avatar/AgADBAAD7qgxG4SAYVJs77YN4H2JwZ2GnhkABHcFcew8GnF4QGsCAAEC__w:449__h:800.jpg', '58ca916a08667d19f5209047'));
//starAgent.set('58ca945308667d19f520904d', itemGenerator(102, 'هادی کاظمی', 'http://starsapp.ir/static/media/58ca945308667d19f520904d/images/avatar/AgADBAAD7qcxG4SAWVLPXj9Clt2w0hWkZBkABNZnC_Ch_ZXeW-sDAAEC__w:640__h:640.jpg', '58ca945308667d19f520904d'));
//starAgent.set('58c930b308667d19f5209037', itemGenerator(103, 'محمد نادری', 'http://starsapp.ir/static/media/58c930b308667d19f5209037/images/avatar/AgADBAADq6cxG4IoWFK7zEaZ_n-rDbiamxkABG3qvfFFRt-HnmQCAAEC__w:640__h:640.jpg', '58c930b308667d19f5209037'));
//starAgent.set('58aea77c08667d19f5208f55', itemGenerator(104, 'امیر کربلایی زاده', 'http://starsapp.ir/static/media/58aea77c08667d19f5208f55/images/avatar/AgADBAADracxG4IoWFI_wZVK2n4DarJUnhkABIv1rawEK-DTcGUCAAEC__w:640__h:640.jpg', '58aea77c08667d19f5208f55'));
//starAgent.set('58ca91aa08667d19f5209049', itemGenerator(105, 'هومن حاجی عبداللهی', 'http://starsapp.ir/static/media/58ca91aa08667d19f5209049/images/avatar/AgADBAAD6qcxG4SAWVLQuuzVOkS6-V24nBkABH710lcecjmUtGUCAAEC__w:640__h:640.jpg', '58ca91aa08667d19f5209049'));
//starAgent.set('5909e06ccf0d5424e1be5188', itemGenerator(106, 'بیژن بنفشه خواه', 'http://starsapp.ir/static/media/5909e06ccf0d5424e1be5188/images/avatar/AgADBAADiqkxGznJUFCB-Sao5pGyd_9VqRkABIEk-kURQTjbBiMBAAEC__w:512__h:512_1493829721275.jpg', '5909e06ccf0d5424e1be5188'));
//starAgent.set('58f5995bcf0d5424e1be4c8b', itemGenerator(107, 'رضا شفیعی جم', 'http://starsapp.ir/static/media/58f5995bcf0d5424e1be4c8b/images/avatar/AgADBAADs6cxGyc6sFO2VgmrN7utbyRgmxkABG33NsUbQPSmV3kDAAEC__w:800__h:800.jpg', '58f5995bcf0d5424e1be4c8b'));
//starAgent.set('58ca91b908667d19f520904c', itemGenerator(108, 'امیر نوری', 'http://starsapp.ir/static/media/58ca91b908667d19f520904c/images/avatar/AgADBAAD76cxG4SAWVKwEuJZDWkrOZQFYBkABKBKeFZnyXHaLPEDAAEC__w:533__h:800.jpg', '58ca91b908667d19f520904c'));
//starAgent.set('58ca91a408667d19f5209048', itemGenerator(109, 'علی مشهدی', 'http://starsapp.ir/static/media/58ca91a408667d19f5209048/images/avatar/AgADBAADt6cxG4IoWFJbyUdoRTMBHqTTnxkABDM_UBNuF_cm9GQCAAEC__w:640__h:640.jpg', '58ca91a408667d19f5209048'));
//starAgent.set('58aea77c08667d19f5208f57', itemGenerator(110, 'مهران غفوریان', 'http://starsapp.ir/static/media/58aea77c08667d19f5208f57/images/avatar/AgADBAADlKgxG4SAWVK-0gP3Eii1KuqZZBkABBspYKbCxn5gb-YDAAEC__w:532__h:800.jpg', '58aea77c08667d19f5208f57'));
//starAgent.set('58ca91b408667d19f520904b', itemGenerator(111, 'علی صادقی', 'http://starsapp.ir/static/media/58ca91b408667d19f520904b/images/avatar/AgADBAADBakxG4SAYVIecDBUN1DNJ7elWBkABBrVI17K033l8y8BAAEC__w:450__h:800.jpg', '58ca91b408667d19f520904b'));
//starAgent.set('590edb54cf0d5424e1be53c8', itemGenerator(112, 'سپند امیر سلیمانی', 'http://starsapp.ir/static/media/590edb54cf0d5424e1be53c8/images/avatar/AgADBAADZqgxG-AOeVAjHPOv61v-Od1JuxkABOr36yGTZfckFM0AAgI__w:800__h:800_1494145970869.jpg', '590edb54cf0d5424e1be53c8'));
//starAgent.set('591163cecf0d5424e1be5922', itemGenerator(114, 'فریبا نادری', 'http://starsapp.ir/static/media/591163cecf0d5424e1be5922/images/avatar/AgADBAAD1KgxG1MliVB2O4g9YwbPRgedmxkABMD7LidQNbsxXwoEAAEC__w:512__h:512_1494312240957.jpg', '591163cecf0d5424e1be5922'));
//starAgent.set('591b4b0bcf0d5424e1be61f6', itemGenerator(115, 'فریبا نادری', 'http://starsapp.ir/static/media/591b4b0bcf0d5424e1be61f6/images/avatar/AgADBAAD26kxG0tS2FBR2J_2M_7H7pDznxkABDXs49U4GFFz9joEAAEC__w:800__h:800_1494961919435.jpg', '591b4b0bcf0d5424e1be61f6'));
//
//let shortCode = new Map();
//shortCode.set('v', 10);
//shortCode.set('vj', 100);
//shortCode.set('vjmb', 1000);
//shortCode.set('v7e8', 2000);
//shortCode.set('vrrk', 3000);
//
//    /**
//     *
//     * @param id
//     * @param title
//     * @param avatar
//     * @param starID
//     * @return {{id: *, title: *, avatar: string, starID}}
//     */
//    function itemGenerator(id, title, avatar, starID) {
//
//        return {
//            id: id,
//    title: title,
//    avatar: avatar || 'http://starsapp.ir/web/etc/images/logo-05.png',
//    starID: starID || null
//  }
//}
//exports.SMS_AGENT = smsAgent;
//exports.STAR_AGENT = starAgent;
//exports.AGENT_SHORT_CODE = shortCode;
//exports.APPLICATION_JSON = 'application/json; charset=utf-8';
//exports.HTML = 'text/html; charset=utf-8';
//
//exports.SALT = '$t4rs_:';


//    /**
//     * variable constants
//     */
//    const WELCOME_MESSAGE = 'هرچیزی که نیاز داری پیدا کن!
//با «نشان» عابربانکها، پمپ بنزین، حتی دوستانت رو پیدا کن، تاکسی بگیر، از جذاب ترین تخفیف ها مطلع شو و اونا رو با دوستات به اشتراک بذار
//برای پیداکردن نزدیک ترین ها، بهترین ها، جذاب ترین ها و جدیدترین ها  همین حالا «نشان» رو دانلود کن neshanapps.ir لغوباارسال L';
//    const EMAIL = 0;
//    const PHONE = 1;
//    const RESTAURANT = 'restaurant';
//    const FOURSQUARE_RESTAURANT = '4d4b7105d754a06374d81259';
//    const CAFE = 'cafe';
//    const FOURSQUARE_CAFE = '4bf58dd8d48988d16d941735';
//    const BANK = 'bank';
//    const FOURSQUARE_BANK = '4bf58dd8d48988d10a951735';
//    const GAS_STATION = 'gas_station';
//    const FOURSQUARE_GAS_STATION = '4bf58dd8d48988d113951735';
//    const HOTEL = 'hotel';
//    const FOURSQUARE_HOTEL = '4bf58dd8d48988d1fa931735,4bf58dd8d48988d163941735,4c38df4de52ce0d596b336e1,52f2ab2ebcbc57f1066b8b53,4bf58dd8d48988d182941735,4bf58dd8d48988d193941735,4bf58dd8d48988d167941735,4d4b7104d754a06370d81259,4bf58dd8d48988d17f941735,4bf58dd8d48988d181941735,4bf58dd8d48988d1e5931735,4bf58dd8d48988d184941735,4d4b7105d754a06372d81259';

//

//
//
//    const SPEND = 0;
//    const BUY = 1;
//    const BUY_PROFILES = 2;
//    const BUY_PROFILES_IRANCELL = 3;
//    /**
//     * Notification name constants
//     */
//    const FRIENDSHIP = 0;
//    const FIND_PLACE = 1;
//    const FIND_BACK_PLACE = -1;
//
//    /**
//     * Table name constants
//     */
//    const TABLE_BUSINESS = 'business';
//    const TABLE_CATEGORIES = 'categories';
//    const TABLE_PRODUCTS = 'products';
//    const TABLE_COMMENTS = 'comments';
//    const TABLE_FRIENDS = 'friends';
//    const TABLE_CONTACTS = 'contacts';
//    const TABLE_ROLE_PERMISSIONS = 'role_permissions';
//    const TABLE_PERMISSIONS = 'permissions';
//    const TABLE_PROFILES = 'profiles';
//    const TABLE_ROLE_PROFILES = 'role_profiles';
//    const TABLE_ROLES = 'roles';
//    const TABLE_TAG = 'tag';
//    const TABLE_NOTIFICATION = 'notification';
//    const TABLE_REPORT = 'report';
//    const TABLE_LOGS_LOCATION_PROFILES = 'logs_location_profiles';
//    const TABLE_PROFILES_LOG_LOCATION_INTERMEDIATE = 'profiles_log_location_intermediate';
//    const TABLE_INVOICES = 'invoices';
//    const TABLE_TRACKER = 'tracker';
//
//
//    /**
//     * Logs action name constants
//     */
//    const LOGS_ACTION_INDEX = 0;
//    const LOGS_ACTION_CREATE = 1;
//    const LOGS_ACTION_STORE = 2;
//    const LOGS_ACTION_SHOW = 3;
//    const LOGS_ACTION_EDIT = 4;
//    const LOGS_ACTION_UPDATE = 5;
//    const LOGS_ACTION_DESTORY = 6;
//    const LOGS_ACTION_VIP = 7;
//    const LOGS_ACTION_STATUS = 8;
//    /**
//     * Logs type name constants
//     */
//    const LOGS_TYPE_CATEGORIES = 0;
//    const LOGS_TYPE_BUSINESS = 1;
//    const LOGS_TYPE_GALLERY = 2;
//    const LOGS_TYPE_CONTACTS = 3;
//    const LOGS_TYPE_PRODUCTS = 4;
//    const LOGS_TYPE_PERMISSIONS = 5;
//    const LOGS_TYPE_ROLES = 7;
//    const LOGS_TYPE_ROLE_PERMISSIONS = 8;
//    const LOGS_TYPE_PROFILES = 9;
//    const LOGS_TYPE_ROLE_PROFILES = 10;
//    const LOGS_TYPE_COMMENTS = 11;
//    const LOGS_TYPE_FRIENDS = 12;
//    const LOGS_TYPE_TOKENS = 13;
//    const LOGS_TYPE_LOGS_LOCATION_PROFILES = 14;
//    const LOGS_TYPE_TAG = 15;
//    const LOGS_TYPE_NOTIFICATION = 16;
//    const LOGS_TYPE_INVOICES = 17;
//    const LOGS_TYPE_TRACKER = 18;
//    const LOGS_TYPE_PRODUCTS_TRACKER = 19;
//    const LOGS_TYPE_REPORT = 20;
//    const LOGS_TYPE_PROFILES_LOG_LOCATION_INTERMEDIATE = 21;
//    /**
//     * Sync Order Relation constants
//     */
//    const userIDRegex = '/<ID>([0-9]+)<\/ID>/';
//    const typeRegex = '/<type>([0-9]+)<\/type>/';
//    const updateTypeRegex = '/<ns1:updateType>([0-9]+)<\/ns1:updateType>/';
//    const updateTimeRegex = '/<ns1:updateTime>([0-9]+)<\/ns1:updateTime>/';
//    const chargeModeRegex = '/<key>chargeMode<\/key>\s*<value>(\d+)<\/value>/';
//    const MDSPSUBEXPMODERegex = '/<key>MDSPSUBEXPMODE<\/key>\s*<value>(\d+)<\/value>/';
//    const operatorIDRegex = '/<key>operatorID<\/key>\s*<value>(\d+)<\/value>/';
//    const transactionIDRegex = '/<key>transactionID<\/key>\s*<value>(\d+)<\/value>/';
//    const orderKeyRegex = '/<key>orderKey<\/key>\s*<value>(\d+)<\/value>/';
//    const cycleEndTimeRegex = '/<key>cycleEndTime<\/key>\s*<value>(\d+)<\/value>/';
//    const traceUniqueIDRegex = '/<key>TraceUniqueID<\/key>\s*<value>(\d+)<\/value>/';
//    const messageIDRegex = '/<key>messageID<\/key>\s*<value>(\d+)<\/value>/';
//    const startTimeREGEX = '/<key>Starttime<\/key>\s*<value>(\w+)<\/value>/';
//////NotifySmsReception
////let NOTIFY_SMS_RECEPTION_REGEX = /<ns2:notifySmsReception.*">(.*)<\/ns2:notifySmsReception>/;
////let NOTIFY_SMS_RECEPTION_MESSAGE_REGEX = /<message>(.*)<\/message>/;
////let SENDER_ADDRESS_REGEX = /<senderAddress>tel:(.*)<\/senderAddress>/;
////let DATE_TIME_REGEX = /<dateTime>(.*)<\/dateTime>/;
////let SMS_SERVICE_ACTIVATION_NUMBER_REGEX = /<smsServiceActivationNumber>tel:(\d+)<\/smsServiceActivationNumber>/;
}