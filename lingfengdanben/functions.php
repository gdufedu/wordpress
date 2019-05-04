<?php
add_theme_support('automatic-feed-links');
/*
register_nav_menu( $location, $description )
函数功能：开启导航菜单功能
@参数 string $location, 导航菜单的位置
@参数 string $description, 导航菜单的描述
开启多个位置的导航菜单，只需要重复调用此函数即可
*/
register_nav_menu( 'daohangshang', '网站的顶部导航' );     //注册一个菜单
register_nav_menu( 'daohangxia', '网站的底部导航' );     //注册一个菜单
/**
* 加载前台脚本和样式表
* 加载主样式表style.css
*/
add_action('wp_enqueue_scripts', 'lingfeng_scripts');
function lingfeng_scripts() {
    /**
    * wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    * 功能：添加样式表
    * @Param string $handle             【必填】样式表的标识符（名称）
    * @Param string $src                        【可选】样式表的所在地址（url）
    * @Param array $deps                    【可选】加载本样式之前，必须首先加载的
    * @Param string $ver                        【可选】样式表的版本
    * @Param boolen $media              【可选】样式表指定的媒体
    * 例如：wp_enqueue_style( 'lingfeng-style', get_stylesheet_uri() );
    * 加载主题中的style.css文件
    */
    wp_enqueue_style( 'lingfeng-style', get_template_directory_uri().'/style.css' );

    /**
    * wp_register_script( $handle, $src, $deps, $ver, $in_footer )
    * 函数功能：加载js脚本
    * @Param string $handle             【必填】脚本的标识符（名称）
    * @Param string $src                        【可选】脚本所在地址（url）
    * @Param array $deps                    【可选】加载本脚本之前，必须首先加载的
    * @Param string $ver                        【可选】脚本的版本
    * @Param boolen $in_footer          【可选】脚本的位置，是否放在页脚
    * 函数说明，仅仅是注册和备案，并没有真正添加。
    * 真正要添加脚本，用wp_enqueue_script( ) 函数
    * 例如：wp_register_script ('lingfeng-lazyload', get_template_directory_uri().'/js/jquery.lazyload.js');
    * 解释：注册一个名字为'lingfeng-lazyload'的脚本，脚本的地址是主题文件夹下的js/juqery.lazyload.js
    */


    /**
    * wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
    * 函数功能：加载js脚本
    * @Param string $handle             【必填】脚本的标识符（名称）
    * @Param string $src                        【可选】脚本所在地址（url）
    * @Param array $deps                    【可选】加载本脚本之前，必须首先加载的
    * @Param string $ver                        【可选】脚本的版本
    * @Param boolen $in_footer          【可选】脚本的位置，是否放在页脚
    * 例如: wp_enqueue_script ('lingfeng-tool', get_template_directory_uri().'/js/tool.js', array( 'jquery', 'lingfeng-lazyload'));
    * 解释：添加名字为‘lingfeng-tool’的脚本，脚本的地址为主题目录下的js/tool.js，而且在加载此脚本之前先要加载名字叫做'jquery'和'lingfeng-lazyload'的脚本
    */

}

/**
* 想要wp_title()函数实现，访问首页显示“站点标题-站点副标题”
* 如果存在翻页且正方的不是第1页，标题格式“标题-第2页”
* 当使用短横线-作为分隔符时，会将短横线转成字符实体&#8211;
* 而我们不需要字符实体，因此需要替换字符实体
* wp_title()函数显示的内容，在分隔符前后会有空格，也要去掉
*/
add_filter('wp_title', 'lingfeng_wp_title', 10, 2);
function lingfeng_wp_title($title, $sep) {
    global $paged, $page;

    //如果是feed页，返回默认标题内容
    if ( is_feed() ) {
        return $title;
    }

    // 标题中追加站点标题
    $title .= get_bloginfo( 'name' );

    // 网站首页追加站点副标题
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // 标题中显示第几页
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( '第%s页', max( $paged, $page ) );

    //去除空格，-的字符实体
    $search = array('&#8211;', ' ');
    $replace = array('-', '');
    $title = str_replace($search, $replace, $title);

    return $title;
}
