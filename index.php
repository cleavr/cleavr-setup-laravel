<!doctype html>
<html data-n-head-ssr>
<head>
    <title>Cleavr - Your New Site</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
    <meta data-n-head="ssr" data-hid="description" name="description" content="">
    <style>/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    main {
        display: block
    }

    h1 {
        font-size: 2em;
        margin: .67em 0
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible
    }

    pre {
        font-family: monospace, monospace;
        font-size: 1em
    }

    a {
        background-color: transparent
    }

    abbr[title] {
        border-bottom: none;
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    b, strong {
        font-weight: bolder
    }

    code, kbd, samp {
        font-family: monospace, monospace;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub, sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    img {
        border-style: none
    }

    button, input, optgroup, select, textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0
    }

    button, input {
        overflow: visible
    }

    button, select {
        text-transform: none
    }

    [type=button], [type=reset], [type=submit], button {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring, button:-moz-focusring {
        outline: 1px dotted ButtonText
    }

    fieldset {
        padding: .35em .75em .625em
    }

    legend {
        box-sizing: border-box;
        color: inherit;
        display: table;
        max-width: 100%;
        padding: 0;
        white-space: normal
    }

    progress {
        vertical-align: baseline
    }

    textarea {
        overflow: auto
    }

    [type=checkbox], [type=radio] {
        box-sizing: border-box;
        padding: 0
    }

    [type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    details {
        display: block
    }

    summary {
        display: list-item
    }

    [hidden], template {
        display: none
    }

    blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
        margin: 0
    }

    button {
        background-color: transparent;
        background-image: none
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color
    }

    fieldset, ol, ul {
        margin: 0;
        padding: 0
    }

    ol, ul {
        list-style: none
    }

    html {
        font-family: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        line-height: 1.5
    }

    *, :after, :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    hr {
        border-top-width: 1px
    }

    img {
        border-style: solid
    }

    textarea {
        resize: vertical
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
        color: #a0aec0
    }

    input:-ms-input-placeholder, textarea:-ms-input-placeholder {
        color: #a0aec0
    }

    input::placeholder, textarea::placeholder {
        color: #a0aec0
    }

    [role=button], button {
        cursor: pointer
    }

    table {
        border-collapse: collapse
    }

    h1, h2, h3, h4, h5, h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    button, input, optgroup, select, textarea {
        padding: 0;
        line-height: inherit;
        color: inherit
    }

    code, kbd, pre, samp {
        font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    audio, canvas, embed, iframe, img, object, svg, video {
        display: block;
        vertical-align: middle
    }

    img, video {
        max-width: 100%;
        height: auto
    }

    .container {
        width: 100%
    }

    @media (min-width: 640px) {
        .container {
            max-width: 640px
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 1024px
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px
        }
    }

    .space-x-3 > :not(template) ~ :not(template) {
        --space-x-reverse: 0;
        margin-right: calc(.75rem * var(--space-x-reverse));
        margin-left: calc(.75rem * (1 - var(--space-x-reverse)))
    }

    .space-x-4 > :not(template) ~ :not(template) {
        --space-x-reverse: 0;
        margin-right: calc(1rem * var(--space-x-reverse));
        margin-left: calc(1rem * (1 - var(--space-x-reverse)))
    }

    .space-y-6 > :not(template) ~ :not(template) {
        --space-y-reverse: 0;
        margin-top: calc(1.5rem * (1 - var(--space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--space-y-reverse))
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .bg-gray-200 {
        --bg-opacity: 1;
        background-color: #edf2f7;
        background-color: rgba(237, 242, 247, var(--bg-opacity))
    }

    .bg-gray-400 {
        --bg-opacity: 1;
        background-color: #cbd5e0;
        background-color: rgba(203, 213, 224, var(--bg-opacity))
    }

    .bg-green-500 {
        --bg-opacity: 1;
        background-color: #48bb78;
        background-color: rgba(72, 187, 120, var(--bg-opacity))
    }

    .bg-blue-600 {
        --bg-opacity: 1;
        background-color: #3182ce;
        background-color: rgba(49, 130, 206, var(--bg-opacity))
    }

    .hover\:bg-blue-700:hover {
        --bg-opacity: 1;
        background-color: #2b6cb0;
        background-color: rgba(43, 108, 176, var(--bg-opacity))
    }

    .border-transparent {
        border-color: transparent
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .rounded-md {
        border-radius: .375rem
    }

    .rounded-full {
        border-radius: 9999px
    }

    .border {
        border-width: 1px
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .inline-flex {
        display: inline-flex
    }

    .table {
        display: table
    }

    .flow-root {
        display: flow-root
    }

    .grid {
        display: grid
    }

    .flex-col {
        flex-direction: column
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .justify-between {
        justify-content: space-between
    }

    .flex-1 {
        flex: 1 1 0%
    }

    .flex-shrink-0 {
        flex-shrink: 0
    }

    .font-medium {
        font-weight: 500
    }

    .font-bold {
        font-weight: 700
    }

    .h-5 {
        height: 1.25rem
    }

    .h-6 {
        height: 1.5rem
    }

    .h-8 {
        height: 2rem
    }

    .h-full {
        height: 100%
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .text-2xl {
        font-size: 1.5rem
    }

    .leading-6 {
        line-height: 1.5rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .mt-1 {
        margin-top: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mt-3 {
        margin-top: .75rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .-mb-8 {
        margin-bottom: -2rem
    }

    .-ml-px {
        margin-left: -1px
    }

    .max-w-xl {
        max-width: 36rem
    }

    .max-w-2xl {
        max-width: 42rem
    }

    .max-w-4xl {
        max-width: 56rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .min-w-0 {
        min-width: 0
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .py-2 {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem
    }

    .py-5 {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
    }

    .py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem
    }

    .pt-1 {
        padding-top: .25rem
    }

    .pb-2 {
        padding-bottom: .5rem
    }

    .pb-8 {
        padding-bottom: 2rem
    }

    .static {
        position: static
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .shadow-sm {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05)
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .text-blue-500 {
        --text-opacity: 1;
        color: #4299e1;
        color: rgba(66, 153, 225, var(--text-opacity))
    }

    .text-blue-600 {
        --text-opacity: 1;
        color: #3182ce;
        color: rgba(49, 130, 206, var(--text-opacity))
    }

    .hover\:text-blue-500:hover {
        --text-opacity: 1;
        color: #4299e1;
        color: rgba(66, 153, 225, var(--text-opacity))
    }

    .hover\:text-blue-700:hover {
        --text-opacity: 1;
        color: #2b6cb0;
        color: rgba(43, 108, 176, var(--text-opacity))
    }

    .uppercase {
        text-transform: uppercase
    }

    .w-0 {
        width: 0
    }

    .w-5 {
        width: 1.25rem
    }

    .w-6 {
        width: 1.5rem
    }

    .w-8 {
        width: 2rem
    }

    .gap-6 {
        grid-gap: 1.5rem;
        gap: 1.5rem
    }

    .grid-cols-1 {
        grid-template-columns:repeat(1, minmax(0, 1fr))
    }

    @-webkit-keyframes spin {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes spin {
        to {
            transform: rotate(1turn)
        }
    }

    @-webkit-keyframes ping {
        75%, to {
            transform: scale(2);
            opacity: 0
        }
    }

    @keyframes ping {
        75%, to {
            transform: scale(2);
            opacity: 0
        }
    }

    @-webkit-keyframes pulse {
        50% {
            opacity: .5
        }
    }

    @keyframes pulse {
        50% {
            opacity: .5
        }
    }

    @-webkit-keyframes bounce {
        0%, to {
            transform: translateY(-25%);
            -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            animation-timing-function: cubic-bezier(.8, 0, 1, 1)
        }
        50% {
            transform: none;
            -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
            animation-timing-function: cubic-bezier(0, 0, .2, 1)
        }
    }

    @keyframes bounce {
        0%, to {
            transform: translateY(-25%);
            -webkit-animation-timing-function: cubic-bezier(.8, 0, 1, 1);
            animation-timing-function: cubic-bezier(.8, 0, 1, 1)
        }
        50% {
            transform: none;
            -webkit-animation-timing-function: cubic-bezier(0, 0, .2, 1);
            animation-timing-function: cubic-bezier(0, 0, .2, 1)
        }
    }

    @media (min-width: 640px) {
        .sm\:container {
            width: 100%
        }
    }

    @media (min-width: 640px) and (min-width: 640px) {
        .sm\:container {
            max-width: 640px
        }
    }

    @media (min-width: 640px) and (min-width: 768px) {
        .sm\:container {
            max-width: 768px
        }
    }

    @media (min-width: 640px) and (min-width: 1024px) {
        .sm\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 640px) and (min-width: 1280px) {
        .sm\:container {
            max-width: 1280px
        }
    }

    @media (min-width: 640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }
    }

    @media (min-width: 768px) {
        .md\:container {
            width: 100%
        }
    }

    @media (min-width: 768px) and (min-width: 640px) {
        .md\:container {
            max-width: 640px
        }
    }

    @media (min-width: 768px) and (min-width: 768px) {
        .md\:container {
            max-width: 768px
        }
    }

    @media (min-width: 768px) and (min-width: 1024px) {
        .md\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 768px) and (min-width: 1280px) {
        .md\:container {
            max-width: 1280px
        }
    }

    @media (min-width: 768px) {
        .md\:space-x-5 > :not(template) ~ :not(template) {
            --space-x-reverse: 0;
            margin-right: calc(1.25rem * var(--space-x-reverse));
            margin-left: calc(1.25rem * (1 - var(--space-x-reverse)))
        }

        .md\:flex {
            display: flex
        }

        .md\:items-center {
            align-items: center
        }

        .md\:justify-between {
            justify-content: space-between
        }
    }

    @media (min-width: 1024px) {
        .lg\:container {
            width: 100%
        }
    }

    @media (min-width: 1024px) and (min-width: 640px) {
        .lg\:container {
            max-width: 640px
        }
    }

    @media (min-width: 1024px) and (min-width: 768px) {
        .lg\:container {
            max-width: 768px
        }
    }

    @media (min-width: 1024px) and (min-width: 1024px) {
        .lg\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 1024px) and (min-width: 1280px) {
        .lg\:container {
            max-width: 1280px
        }
    }

    @media (min-width: 1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .lg\:grid-flow-col-dense {
            grid-auto-flow: column dense
        }

        .lg\:grid-cols-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr))
        }

        .lg\:col-span-1 {
            grid-column: span 1/span 1
        }

        .lg\:col-span-2 {
            grid-column: span 2/span 2
        }

        .lg\:col-start-1 {
            grid-column-start: 1
        }

        .lg\:col-start-3 {
            grid-column-start: 3
        }
    }

    @media (min-width: 1280px) {
        .xl\:container {
            width: 100%
        }
    }

    @media (min-width: 1280px) and (min-width: 640px) {
        .xl\:container {
            max-width: 640px
        }
    }

    @media (min-width: 1280px) and (min-width: 768px) {
        .xl\:container {
            max-width: 768px
        }
    }

    @media (min-width: 1280px) and (min-width: 1024px) {
        .xl\:container {
            max-width: 1024px
        }
    }

    @media (min-width: 1280px) and (min-width: 1280px) {
        .xl\:container {
            max-width: 1280px
        }
    }

    .nuxt-progress {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        width: 0;
        opacity: 1;
        transition: width .1s, opacity .4s;
        background-color: #000;
        z-index: 999999
    }

    .nuxt-progress.nuxt-progress-notransition {
        transition: none
    }

    .nuxt-progress-failed {
        background-color: red
    }

    html {
        font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 16px;
        word-spacing: 1px;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box
    }

    *, :after, :before {
        box-sizing: border-box;
        margin: 0
    }

    .button--green {
        display: inline-block;
        border-radius: 4px;
        border: 1px solid #3b8070;
        color: #3b8070;
        text-decoration: none;
        padding: 10px 30px
    }

    .button--green:hover {
        color: #fff;
        background-color: #3b8070
    }

    .button--grey {
        display: inline-block;
        border-radius: 4px;
        border: 1px solid #35495e;
        color: #35495e;
        text-decoration: none;
        padding: 10px 30px;
        margin-left: 15px
    }

    .button--grey:hover {
        color: #fff;
        background-color: #35495e
    }</style>
</head>
<body>
<div data-server-rendered="true" id="__nuxt"><!---->
    <div id="__layout">
        <div>
            <div>
                <div class="min-h-screen bg-gray-100">
                    <main class="py-10">
                        <div class="max-w-4xl mx-auto px-4 justify-between sm:px-6 flex items-center space-x-5 lg:max-w-7xl lg:px-8">
                            <a href="https://cleavr.io" target="_blank" class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <svg viewBox="0 0 256 256" fill="none" style="width: 3em; color: rgba(29, 78, 216,1) " xmlns="http://www.w3.org/2000/svg"
                                             class="w-auto text-blue-700 h-10 dark:text-gray-500">
                                            <path d="M128 256C198.692 256 256 198.692 256 128C256 57.3075 198.692 0 128 0C57.3075 0 0 57.3075 0 128C0 198.692 57.3075 256 128 256Z"
                                                  fill="currentColor"></path>
                                            <g opacity="0.047">
                                                <path opacity="0.047"
                                                      d="M204.197 148.146C198.799 135.723 193.493 123.346 189.987 110.266L106.555 132.623C110.059 145.702 111.638 159.299 113.214 172.894C144.754 170.273 187.879 154.438 204.197 148.146ZM179.249 121.41C179.115 120.922 179.08 120.412 179.145 119.91C179.21 119.408 179.374 118.924 179.627 118.485C179.88 118.047 180.217 117.663 180.62 117.356C181.022 117.049 181.481 116.824 181.971 116.695C182.459 116.562 182.968 116.527 183.47 116.592C183.972 116.657 184.456 116.821 184.894 117.074C185.332 117.327 185.716 117.664 186.023 118.066C186.33 118.468 186.555 118.927 186.683 119.416C186.817 119.905 186.852 120.415 186.787 120.917C186.722 121.419 186.558 121.903 186.305 122.341C186.052 122.779 185.715 123.163 185.312 123.471C184.91 123.778 184.451 124.002 183.961 124.131C182.978 124.349 181.948 124.19 181.076 123.687C180.204 123.183 179.552 122.371 179.249 121.41Z"
                                                      fill="#E7E8E9"></path>
                                                <path opacity="0.047"
                                                      d="M201.231 171.223C207.278 169.012 210.494 162.839 208.316 157.739C206.931 154.498 205.633 151.303 204.197 148.146C187.829 154.525 144.754 170.271 113.213 172.894C113.599 176.258 113.582 174.271 113.968 177.634C114.631 183.139 120.553 186.789 126.897 185.681C152.005 181.092 177.139 179.892 201.231 171.223Z"
                                                      fill="white"></path>
                                                <path opacity="0.047"
                                                      d="M117.374 129.764L120.895 142.905L101.329 148.151L97.8058 135.008L117.374 129.764Z"
                                                      fill="#E7E8E9"></path>
                                                <g opacity="0.047">
                                                    <g opacity="0.047" filter="url(#filter0_d)">
                                                        <path d="M49.7893 162.811L45.8413 148.077C45.5819 147.115 46.0859 146.242 47.0503 145.983L104.186 130.674C105.15 130.415 106.023 130.919 106.282 131.884L110.229 146.615C110.486 147.577 109.982 148.45 109.019 148.711L51.8843 164.019C50.9227 164.276 49.9614 163.721 49.7886 162.809L49.7893 162.811Z"
                                                              fill="black"></path>
                                                    </g>
                                                    <path opacity="0.047"
                                                          d="M49.7893 162.811L45.8413 148.077C45.5819 147.115 46.0859 146.242 47.0503 145.983L104.186 130.674C105.15 130.415 106.023 130.919 106.282 131.884L110.229 146.615C110.486 147.577 109.982 148.45 109.019 148.711L51.8843 164.019C50.9227 164.276 49.9614 163.721 49.7886 162.809L49.7893 162.811Z"
                                                          fill="#2B2B2B"></path>
                                                </g>
                                            </g>
                                            <g opacity="0.081">
                                                <path opacity="0.081"
                                                      d="M201.412 124.774C193.939 113.477 186.564 102.209 180.84 89.9373L102.557 126.443C108.279 138.714 112.196 151.83 116.108 164.945C146.714 156.887 186.434 133.804 201.412 124.774ZM172.2 102.776C171.984 102.319 171.86 101.823 171.837 101.317C171.814 100.811 171.891 100.306 172.064 99.8305C172.237 99.3548 172.503 98.9182 172.846 98.5458C173.189 98.1734 173.602 97.8726 174.062 97.6608C174.519 97.445 175.015 97.322 175.52 97.2989C176.026 97.2758 176.531 97.353 177.006 97.526C177.482 97.699 177.918 97.9645 178.29 98.3071C178.663 98.6497 178.963 99.0626 179.175 99.522C179.391 99.9798 179.515 100.476 179.538 100.981C179.561 101.487 179.484 101.992 179.311 102.468C179.138 102.944 178.872 103.38 178.529 103.753C178.186 104.125 177.773 104.426 177.313 104.638C176.383 105.023 175.341 105.046 174.395 104.701C173.448 104.357 172.665 103.67 172.2 102.776Z"
                                                      fill="#E7E8E9"></path>
                                                <path opacity="0.081"
                                                      d="M202.498 148.015C208.07 144.788 210.164 138.15 207.134 133.506C205.207 130.555 203.374 127.634 201.411 124.774C186.4 133.898 146.714 156.885 116.108 164.945C117.072 168.191 116.71 166.237 117.674 169.483C119.283 174.789 125.749 177.355 131.804 175.162C155.734 166.283 180.277 160.737 202.498 148.015Z"
                                                      fill="white"></path>
                                                <path opacity="0.081"
                                                      d="M112.716 121.748L118.465 134.078L100.107 142.642L94.3556 130.311L112.716 121.748Z"
                                                      fill="#E7E8E9"></path>
                                            </g>
                                            <g opacity="0.205">
                                                <path opacity="0.205"
                                                      d="M193.348 98.5813C184.027 88.7535 174.808 78.9374 167.04 67.846L96.2855 117.39C104.052 128.481 110.186 140.718 116.316 152.955C145.058 139.705 180.166 110.075 193.348 98.5813ZM160.76 81.9904C160.468 81.5771 160.26 81.11 160.15 80.6161C160.039 80.1222 160.027 79.6112 160.115 79.1127C160.203 78.6142 160.389 78.1381 160.662 77.7118C160.935 77.2855 161.29 76.9176 161.705 76.6291C162.119 76.3372 162.586 76.13 163.079 76.0194C163.573 75.9089 164.084 75.8972 164.582 75.9851C165.08 76.0729 165.556 76.2586 165.982 76.5313C166.408 76.804 166.776 77.1585 167.065 77.5741C167.357 77.9874 167.564 78.4545 167.675 78.9485C167.786 79.4424 167.798 79.9533 167.71 80.4518C167.622 80.9503 167.436 81.4264 167.163 81.8527C166.89 82.279 166.535 82.647 166.119 82.9354C165.27 83.4766 164.248 83.6798 163.256 83.5048C162.264 83.3299 161.373 82.7896 160.76 81.9904Z"
                                                      fill="#E7E8E9"></path>
                                                <path opacity="0.205"
                                                      d="M198.454 121.281C203.381 117.135 204.291 110.235 200.5 106.187C198.09 103.615 195.777 101.057 193.348 98.5814C180.149 110.173 145.058 139.703 116.316 152.955C117.829 155.984 117.134 154.123 118.647 157.151C121.152 162.098 127.966 163.502 133.548 160.291C155.573 147.391 178.78 137.667 198.454 121.281Z"
                                                      fill="white"></path>
                                                <path opacity="0.205"
                                                      d="M105.475 111.003L113.278 122.147L96.6858 133.769L88.8805 122.624L105.475 111.003Z"
                                                      fill="#E7E8E9"></path>
                                                <path opacity="0.205"
                                                      d="M53.2687 165.173L44.5196 152.677C43.9465 151.862 44.1216 150.869 44.9394 150.296L93.393 116.369C94.2109 115.796 95.2036 115.971 95.7763 116.789L104.524 129.282C105.095 130.097 104.92 131.09 104.104 131.665L55.6503 165.59C54.8348 166.161 53.7417 165.969 53.2671 165.17L53.2687 165.173Z"
                                                      fill="#2B2B2B"></path>
                                            </g>
                                            <path d="M181.86 75.668C170.972 67.616 160.18 59.562 150.6 50L89.4961 111C99.0761 120.56 107.244 131.534 115.412 142.506C141.428 124.486 170.872 89.256 181.864 75.668H181.86ZM146.872 64.998C146.513 64.6425 146.227 64.2193 146.032 63.7527C145.837 63.2862 145.737 62.7856 145.737 62.28C145.737 61.7744 145.837 61.2738 146.032 60.8073C146.227 60.3407 146.513 59.9175 146.872 59.562C147.229 59.2031 147.653 58.9183 148.121 58.724C148.588 58.5296 149.089 58.4296 149.595 58.4296C150.101 58.4296 150.602 58.5296 151.07 58.724C151.537 58.9183 151.961 59.2031 152.318 59.562C152.678 59.9175 152.963 60.3407 153.158 60.8073C153.353 61.2738 153.453 61.7744 153.453 62.28C153.453 62.7856 153.353 63.2862 153.158 63.7527C152.963 64.2193 152.678 64.6425 152.318 64.998C151.574 65.6779 150.603 66.055 149.595 66.055C148.587 66.055 147.616 65.6779 146.872 64.998Z"
                                                  fill="#E7E8E9"></path>
                                            <path d="M190.836 97.108C194.97 92.176 194.668 85.23 190.23 81.908C187.408 79.796 184.684 77.682 181.862 75.668C170.87 89.358 141.426 124.488 115.41 142.506C117.426 145.224 116.418 143.512 118.434 146.23C121.762 150.658 128.72 150.86 133.66 146.734C153.122 130.226 174.3 116.636 190.836 97.108Z"
                                                  fill="white"></path>
                                            <path d="M97.4404 103.124L107.064 112.734L92.7344 127.04L83.1084 117.43L97.4404 103.124Z"
                                                  fill="#E7E8E9"></path>
                                            <path d="M55.4123 165.456L44.6203 154.686C43.9143 153.98 43.9143 152.974 44.6203 152.27L86.4683 110.496C87.1723 109.792 88.1823 109.792 88.8883 110.496L99.6763 121.266C100.382 121.972 100.382 122.978 99.6763 123.682L57.8323 165.456C57.1263 166.16 56.0163 166.16 55.4123 165.456Z"
                                                  fill="#2B2B2B"></path>
                                            <defs>
                                                <filter id="filter0_d" x="43.7737" y="129.607" width="72.522"
                                                        height="41.4751" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
                                                    <feOffset dx="2" dy="3"></feOffset>
                                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                                    <feColorMatrix type="matrix"
                                                                   values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"></feColorMatrix>
                                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                                             result="effect1_dropShadow"></feBlend>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                                             result="shape"></feBlend>
                                                </filter>
                                                <linearGradient id="paint0_linear" x1="484.826" y1="421.583"
                                                                x2="-1.66124e-05" y2="7.01693"
                                                                gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#6A11CB"></stop>
                                                    <stop offset="1" stop-color="#2575FC"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div><h1 class="text-2xl font-bold text-gray-900 uppercase">Cleavr</h1></div>
                            </a> <a href="https://twitter.com/thecleavr" target="_blank"
                                    class="text-blue-500 hover:text-blue-700">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a></div>
                        <div class="mt-8 max-w-4xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                            <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                                <section aria-labelledby="applicant-information-title">
                                    <div class="bg-white shadow sm:rounded-lg">
                                        <div class="px-4 py-5 sm:px-6"><h2 id="applicant-information-title"
                                                                           class="text-lg leading-6 font-medium text-gray-900">
                                            You've successfully added your Laravel site! 🎉
                                        </h2>
                                            <p class="mt-1 max-w-2xl text-sm text-gray-700">
                                                Let's now work on deploying your app.
                                            </p></div>
                                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6"><h3
                                                class="text-lg leading-6 font-medium text-gray-900">
                                            Deployment guides
                                        </h3>
                                            <div class="mt-2 max-w-xl text-sm text-gray-700"><p>
                                                We have several resources to help guide you through deploying various
                                                popular apps and frameworks.
                                            </p></div>
                                            <div class="mt-3 text-sm"><a href="https://docs.cleavr.io/guides"
                                                                         target="_blank"
                                                                         class="font-medium text-blue-600 hover:text-blue-500">
                                                View the deployment guides <span aria-hidden="true">→</span></a></div>
                                        </div>
                                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6 blokwise__dynamic"><h3
                                                class="text-lg leading-6 font-medium text-gray-900">
                                            Troubleshooting tips
                                        </h3>
                                            <div class="mt-2 max-w-xl text-sm text-gray-700"><p>
                                                Having trouble deploying? Check out the troubleshooting guide for a list
                                                of common Laravel deployment issues and how to resolve them.
                                            </p></div>
                                            <div class="mt-3 text-sm"><a
                                                    href="https://docs.cleavr.io/laravel-deployments" target="_blank"
                                                    class="font-medium text-blue-600 hover:text-blue-500"> See the
                                                Laravel troubleshooting tips <span aria-hidden="true">→</span></a></div>
                                        </div>
                                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6"><h3
                                                class="text-lg leading-6 font-medium text-gray-900">
                                            Cleavr community forum
                                        </h3>
                                            <div class="mt-2 max-w-xl text-sm text-gray-700"><p>
                                                Come hang out with us on the community forum and join in on the
                                                conversations or let us know if you're stuck and need help.
                                            </p></div>
                                            <div class="mt-3 text-sm"><a href="https://forum.cleavr.io/" target="_blank"
                                                                         class="font-medium text-blue-600 hover:text-blue-500">
                                                Join in on the discussions <span aria-hidden="true">→</span></a></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <section class="lg:col-start-3 lg:col-span-1">
                                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6"><h2 id="timeline-title"
                                                                                                 class="text-lg font-medium text-gray-900">
                                    Progress</h2>
                                    <div class="mt-6 flow-root">
                                        <ul class="-mb-8">
                                            <li>
                                                <div class="relative pb-8"><span aria-hidden="true"
                                                                                 class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"></span>
                                                    <div class="relative flex space-x-3 items-center">
                                                        <div><span
                                                                class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-white"><path fill-rule="evenodd"
                                                                                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                                 clip-rule="evenodd"></path></svg></span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div><p class="text-sm text-gray-700 font-bold">Provision
                                                                server</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="relative pb-8"><span aria-hidden="true"
                                                                                 class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"></span>
                                                    <div class="relative flex space-x-3 items-center">
                                                        <div><span
                                                                class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-white"><path fill-rule="evenodd"
                                                                                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                                 clip-rule="evenodd"></path></svg></span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div><p class="text-sm text-gray-700 font-bold">Add site</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="relative pb-8"><span aria-hidden="true"
                                                                                 class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"></span>
                                                    <div class="relative flex space-x-3 items-center">
                                                        <div><span
                                                                class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true"
                                                                class="h-5 w-5 text-white"><path fill-rule="evenodd"
                                                                                                 d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                                 clip-rule="evenodd"></path></svg></span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div><p class="text-sm text-gray-700 font-bold">Deploy web
                                                                app</p>
                                                                <p></p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-6 flex flex-col justify-stretch"><a
                                            href="https://docs.cleavr.io/deployments" target="_blank"
                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        View deployment docs
                                    </a></div>
                                </div>
                                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6 mt-6 blokwise__dynamic"><h2
                                        id="timeline-title" class="text-lg font-medium text-gray-900">Laravel
                                    Resources</h2>
                                    <div class="mt-3 flow-root">
                                        <ul class="-mb-8 pb-8">
                                            <li>
                                                <div class="relative pb-2"><a href="https://laravel.com/docs"
                                                                              class="text-sm text-blue-600 hover:text-blue-500">Documentation</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="relative pb-2"><a href="https://laracasts.com/discuss"
                                                                              target="_blank"
                                                                              class="text-sm text-blue-600 hover:text-blue-500">Laravel
                                                    Discussions</a></div>
                                            </li>
                                            <li>
                                                <div class="relative pb-2"><a href="https://laracasts.com/"
                                                                              target="_blank"
                                                                              class="text-sm text-blue-600 hover:text-blue-500">Laracasts</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
