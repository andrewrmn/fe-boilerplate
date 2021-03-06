<style type="text/css">
.patternLibrary > * {
    background-color: #e7e7e7;
    color: #282828;
    text-align: center;
    padding: 8px 0;
    font-size: 14px;
    transition: all 0.4s ease;
    margin-bottom: 8px;
}

.patternLibrary .hover:hover {
    background-color: #282828;
    transition: background-color 0.4s ease;
    cursor: default;
}

.patternLibrary-sections > * {
    background-color: #282828;
    color: #fff;
    text-align: center;
}

.mask {
    background-color: yellow;
}

.is-open.target {
    color: orange;
}

.inline-code {
    font: 14px Consolas, "Liberation Mono", Menlo, Courier, monospace;
    background-color: #f2f2f2;
    padding: 4px 10px;
    color: #690;
}

.section--border {
    border-bottom: 1px dotted #3a3a3a;
    border-bottom: 1px solid #666;
}

.module {
    overflow: hidden;
    margin-top: 36px;
}

.module__display {
    margin-bottom: 24px;
}

.module-navigation {
    margin-top: 48px;
}

.module-navigation [data-scroll-to] {
    font-size: 14px;
}

.module-navigation [data-scroll-to]:hover {
    opacity: 0.5;
}

.module-navigation > li {
    font-size: 12px;
}

.module-navigation > ul > li + li {
    margin-top: 20px;
}

.module-navigation .section__hd {
    margin-bottom: 4px;
    //padding-bottom: 4px;
}

.h-lg {
    font-family: 'Karla', sans-serif;
    font-weight: 700;
    font-size: 3.6rem;
    line-height: 1.2;
    color: #3a3a3a;

    @media (min-width: 800px) {
        font-size: 5.0rem;
        line-height: 1.2;
    }
}

	/* ----------------------------------------
	 Pre Styles
	 @author Lea Verou
	---------------------------------------- */
	code[class*="language-"],
	pre[class*="language-"] {
	    color: black;
	    text-shadow: 0 1px white;
	    font-family: Consolas, Monaco, 'Andale Mono', monospace;
	    direction: ltr;
	    text-align: left;
	    white-space: pre;
	    word-spacing: normal;
	    word-break: normal;
	    font-size: 14px;
	    line-height: 1.4;

	    -moz-tab-size: 4;
	    -o-tab-size: 4;
	    tab-size: 4;

	    -webkit-hyphens: none;
	    -moz-hyphens: none;
	    -ms-hyphens: none;
	    hyphens: none;
	}

	pre[class*="language-"]::-moz-selection, pre[class*="language-"] ::-moz-selection,
	code[class*="language-"]::-moz-selection, code[class*="language-"] ::-moz-selection {
	    text-shadow: none;
	    background: #b3d4fc;
	}

	pre[class*="language-"]::selection, pre[class*="language-"] ::selection,
	code[class*="language-"]::selection, code[class*="language-"] ::selection {
	    text-shadow: none;
	    background: #b3d4fc;
	}

	@media print {
	    code[class*="language-"],
	    pre[class*="language-"] {
	        text-shadow: none;
	    }
	}

	/* Code blocks */
	pre[class*="language-"] {
	    /*margin-top: 36px;*/
	    padding: 24px 32px;
	    overflow: auto;
	}

	:not(pre) > code[class*="language-"],
	pre[class*="language-"] {
	    background: #f5f2f0;
	    background-color: #f2f2f2;
	    border: 1px solid #eaeaea;
	}

	/* Inline code */
	:not(pre) > code[class*="language-"] {
	    padding: .1em;
	    border-radius: .3em;
	}

	.token.comment,
	.token.prolog,
	.token.doctype,
	.token.cdata {
	    color: slategray;
	}

	.token.punctuation {
	    color: #999;
	}

	.namespace {
	    opacity: .7;
	}

	.token.property,
	.token.tag,
	.token.boolean,
	.token.number,
	.token.constant,
	.token.symbol,
	.token.deleted {
	    color: #905;
	}

	.token.selector,
	.token.attr-name,
	.token.string,
	.token.char,
	.token.builtin,
	.token.inserted {
	    color: #690;
	}

	.token.operator,
	.token.entity,
	.token.url,
	.language-css .token.string,
	.style .token.string {
	    color: #a67f59;
	    background: hsla(0, 0%, 100%, .5);
	}

	.token.atrule,
	.token.attr-value,
	.token.keyword {
	    color: #07a;
	}

	.token.function {
	    color: #DD4A68;
	}

	.token.regex,
	.token.important,
	.token.variable {
	    color: #e90;
	}

	.token.important,
	.token.bold {
	    font-weight: bold;
	}
	.token.italic {
	    font-style: italic;
	}

	.token.entity {
	    cursor: help;
	}

	pre.line-numbers {
	    position: relative;
	    padding-left: 3.8em;
	    counter-reset: linenumber;
	}

	pre.line-numbers > code {
	    position: relative;
	}

	.line-numbers .line-numbers-rows {
	    position: absolute;
	    pointer-events: none;
	    top: 0;
	    font-size: 100%;
	    left: -3.8em;
	    width: 3em; /* works for line-numbers below 1000 lines */
	    letter-spacing: -1px;
	    border-right: 1px solid #999;

	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;

	}

	    .line-numbers-rows > span {
	        pointer-events: none;
	        display: block;
	        counter-increment: linenumber;
	    }

	        .line-numbers-rows > span:before {
	            content: counter(linenumber);
	            color: #999;
	            display: block;
	            padding-right: 0.8em;
	            text-align: right;
	        }
	.token a {
	    color: inherit;
	}

	.markup-hd {
	    width: 100%;
	    background-color: #231f20;
	    padding: 12px 24px;
	    margin-top: 24px;
	}

	.markup-hd * {
	    color: #fff;
	}
</style>
