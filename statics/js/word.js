var num = $('.contactList li').length;
if (num > 3) {
    $(".contactList").jscroll({ W: "10px"//设置滚动条宽度
					, BgUrl: "url(../images/else/s_bg3.gif)"//设置滚动条背景图片地址
					, Bg: "right 0 repeat-y"//设置滚动条背景图片position,颜色等
					, Bar: { Pos: "up"//设置滚动条初始化位置在底部
						 , Bd: { Out: "#bcbcbc", Hover: "#ccc"}//设置滚动滚轴边框颜色：鼠标离开(默认)，经过
						 , Bg: { Out: "-45px 0 repeat-y", Hover: "-58px 0 repeat-y", Focus: "-71px 0 repeat-y" }
					}//设置滚动条滚轴背景：鼠标离开(默认)，经过，点击
					, Btn: { btn: false//是否显示上下按钮 false为不显示
						 , uBg: { Out: "0 0", Hover: "-15px 0", Focus: "-30px 0"}//设置上按钮背景：鼠标离开(默认)，经过，点击
						 , dBg: { Out: "0 -15px", Hover: "-15px -15px", Focus: "-30px -15px" }
					}//设置下按钮背景：鼠标离开(默认)，经过，点击
					, Fn: function () { } //滚动时候触发的方法
    });
}