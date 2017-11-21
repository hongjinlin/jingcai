<?php  if (!defined('APP_PATH')) exit('No direct script access allowed.');
// 配置样例 说明
/*$scache['zooling_test'] = array(
    'database' => array(
        'handle' => 'system',
        'from' => 'formulas',
        'field' => 'name,formula,type',
        'where' => 'quality_id != 3 and scene_id != 0'
    ),
    'index' => 'name, id',    // 第三个索引列
    'value' => 'formula',       // 取得值的列
    'expiration' => 1,
    //'cate' => 'mescache',         // cache过期时间，不设置或者0表示永不过期
    'array' => true,            //是否以数组形式保存数组
    'synchronous' => 'meml',    // 是否要同步，指定同步mescache服务器句柄
        //'cate' => 'redis',       // Cache类型，mescache和文件cache
    'manual' => true,           // 是否手动生成的，如果为true，则MCache类不自动生成cache数据;如果为false或者不设置，则MCache类将根据本节配置生成cache数据
);*/

$scache['banner_act'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'banner_act',
    ),
    'index' => 'act_id',    // 第三个索引列
    'expiration' => 1,
);
$scache['banner_time_frames'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'banner_time_frames',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);
$scache['bus_region'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'bus_region',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);
$scache['act_activities'] = array(
    'database' => array(
        'handle' => 'yeyr',
        'from' => 'act_activities',
        'order' => 'id desc'
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);
$scache['settings'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'settings',
    ),
    'index' => 'name',    // 第三个索引列
    'value' => 'value',
    'expiration' => 1,
);

$scache['vote_config'] = array(
    'database' => array(
        'handle' => 'yeyr',
        'from' => 'vote_config',
    ),
    'index' => 'aid',    // 第三个索引列
    'expiration' => 1,
);

$scache['plugins'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'plugins',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

$scache['apps'] = array(
    'database' => array(
        'handle' => 'yeyr',
        'from' => 'apps',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

$scache['groups'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'groups',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

// 博饼头衔
$scache['bobing_rule'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'bobing_rule',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

// 奖励
$scache['bobing_award'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'bobing_award',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

// 微信消息接收/回复
$scache['wx_reply_model'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'wx_reply_model',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

$scache['wx_reply_rz_type'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'wx_reply_rz_type',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);

$scache['wx_reply_sz_type'] = array(
    'database' => array(
        'handle' => 'yeys',
        'from' => 'wx_reply_sz_type',
    ),
    'index' => 'id',    // 第三个索引列
    'expiration' => 1,
);
