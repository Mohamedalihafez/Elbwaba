@extends('layouts.master.master')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<style>
 body *{
  font-family: system-ui;
}

.error {
    font-size: 12px !important;
    font-weight: bold !important;
    color: #bc3636 !important;
    white-space: nowrap;
}
@media (max-width: 1023px)
{
    .d-flex {
        display: flex !important;
    }
    .client-section .client-logo .item {
      padding: 0px !important;
    }
    .btn { 
      padding: .375rem 0.55rem !important;
    }
    .bar {
      left: 0px !important;
    }
}

.market-btn {
    display: inline-block;
    padding: 0.3125rem 0.875rem;
    padding-left: 2.8125rem;
    -webkit-transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    transition: border-color 0.25s ease-in-out, background-color 0.25s ease-in-out;
    border: 1px solid #e7e7e7;
    background-position: center left 0.75rem;
    background-color: #fff;
    background-size: 1.5rem 1.5rem;
    background-repeat: no-repeat;
    text-decoration: none;
}
.market-btn .market-button-title {
    display: block;
    color: #222;
    font-size: 1.125rem;
}
.market-btn .market-button-subtitle {
    display: block;
    margin-bottom: -0.25rem;
    color: #888;
    font-size: 0.75rem;
}
.market-btn:hover {
    background-color: #f7f7f7;
    text-decoration: none;
}

.apple-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjMmUyZTJlIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiMyZTJlMmUiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.google-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzVDREFERDsiIHBvaW50cz0iMjkuNTMsMCAyOS41MywyNTEuNTA5IDI5LjUzLDUxMiAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNCREVDQzQ7IiBwb2ludHM9IjM2OS4wNjcsMTgwLjU0NyAyNjIuMTc1LDExOS40NjcgMjkuNTMsMCAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNEQzY4QTE7IiBwb2ludHM9IjI5LjUzLDUxMiAyOS41Myw1MTIgMjYyLjE3NSwzODMuNTUxIDM2OS4wNjcsMzIyLjQ3IDI5OS4wMDQsMjUxLjUwOSAiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQ0E5NjsiIGQ9Ik0zNjkuMDY3LDE4MC41NDdsLTcwLjA2Myw3MC45NjFsNzAuMDYzLDcwLjk2MWwxMDguNjg4LTYyLjg3N2M2LjI4OC0zLjU5Myw2LjI4OC0xMS42NzcsMC0xNS4yNyAgTDM2OS4wNjcsMTgwLjU0N3oiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.windows-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMC4xNzYsMjI0TDAuMDAxLDY3Ljk2M2wxOTItMjYuMDcyVjIyNEgwLjE3NnogTTIyNC4wMDEsMzcuMjQxTDQ3OS45MzcsMHYyMjRIMjI0LjAwMVYzNy4yNDF6IE00NzkuOTk5LDI1NmwtMC4wNjIsMjI0ICAgbC0yNTUuOTM2LTM2LjAwOFYyNTZINDc5Ljk5OXogTTE5Mi4wMDEsNDM5LjkxOEwwLjE1Nyw0MTMuNjIxTDAuMTQ3LDI1NmgxOTEuODU0VjQzOS45MTh6IiBmaWxsPSIjMDBiY2YyIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.amazon-btn {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGQUJGNjhGNDRGNkMxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGQUJGNjhGMzRGNkMxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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);
}
.market-btn-light {
    border-color: rgba(255, 255, 255, 0.14);
    background-color: rgba(0, 0, 0, 0);
}
.market-btn-light .market-button-title {
    color: #fff;
}
.market-btn-light .market-button-subtitle {
    color: rgba(255, 255, 255, 0.6);
}
.market-btn-light:hover {
    background-color: rgba(255, 255, 255, 0.06);
}
.market-btn-light.apple-btn {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.market-btn-light.amazon-btn {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1QjFCQzQ2QjRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1QjFCQzQ2QTRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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);
}
.ml-3 {
    margin-left: 10px !important;
}
.btn-third {
    background-color: orange;
    padding: 6px !important;
    color: white;
}
.btn-third:hover {
    background-color: rgb(197, 140, 33);
    padding: 6px !important;
    color: white;
}

.image-upload-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}

.custom-file-upload {
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-file-upload:hover {
    background-color: #2980b9;
}

#imageInput {
    display: none;
}

.image-preview {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.image-preview img {
    max-width: 100px;
    max-height: 100px;
    object-fit: cover;
    border: 1px solid #ddd;
    border-radius: 5px;
}

#uploadButton {
    background-color: #27ae60;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#uploadButton:hover {
    background-color: #219850;
}
.sellproduct {
    background-color: white;
    padding: 20px !important;
}
.mb-2 {
    margin-bottom: 2px !important;
}
.f-xl {
    font-size: x-large !important;
}
.form-control:disabled, .form-control:read-only {
    background-color: white;
    height: 55px !important;
    border: 0px !important;
}
.data-ads {
    background-color: white;
    padding: 20px ;

}
.data-ads input , .data-ads select , .data-ads textarea{
    background-color: #EFFDF5 !important;
}

  .upload__box {
    padding-top: 10px !important;
  }
  .upload__inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
  .upload__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 5px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #4045ba;
    border-color: #4045ba;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;
  }
  .upload__btn:hover {
    background-color: unset;
    color: #4045ba;
    transition: all 0.3s ease;
  }
  .upload__btn-box {
    margin-bottom: 10px;
  }
  .upload__img-wrap {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
  }
  .upload__img-box {
    width: 200px;
    padding: 0 10px;
    margin-bottom: 12px;
  }
  .upload__img-close {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 10px;
    right: 10px;
    text-align: center;
    line-height: 24px;
    z-index: 1;
    cursor: pointer;
  }
  .upload__img-close:after {
    content: "\2716";
    font-size: 14px;
    color: white;
  }
  .img-bg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    padding-bottom: 100%;
  }
  
  .mb-0 {
    margin-bottom: 0px !important;
  }


  .gallery-preview-wrapper {
    position: relative;
    height: 144px;
    width: 256px;
    margin: 2px 20px 20px 0px;
  /*   border-radius: 10px;
    background: #fff;
    border: 2px dashed #c2cdda; */
  }
  
  .gallery-preview-wrapper.active {
    border: none; 
  }
  
  .gallery-preview-wrapper .gallery-pic-container {
    position: absolute;
    height: 100%;
    width: 100%;
    border-radius: 10px;
    border: 2px dashed grey;
  }
  
  .gallery-preview-wrapper .gallery-pic-container img {
    height: 100%;
    width: 100%;
    object-fit: contain;
  }
  
  .gallery-preview-wrapper .gallery-cancel-btn {
    position: absolute;
    right: 15px;
    top: 5px;
    font-size: 20px;
    cursor: pointer;
    color: #c2cdda;
    display: none;
  }
  
  .gallery-preview-wrapper.active:hover .gallery-cancel-btn {
    display: block;
  }
  
  .gallery-preview-wrapper .gallery-cancel-btn:hover {
    color: #e74c3c;
  }
  
  .gallery-preview-wrapper .gallery-file-name {
    position: absolute;
    bottom: 0px;
    width: 100%;
    color: #fff;
    padding: 8px 0;
    font-size: 18px;
    display: none;
    background: linear-gradient(to right, #ff4a4a 0%, #ff9999 100%);;
  }
  
  .gallery-preview-wrapper.active:hover .gallery-file-name {
    display: block;
  }
  
  /****************************************/
  #galleryControls {
    border: 2px dashed #19b6a7;
    border-radius: 10px;
    width: 50%;
    height: auto;
    min-height: 220px !important;
  }
  
  #galleryUploadBtn {
    border: none;
    border-radius: 10px;
    width: 100%;
    height: 100%;
  }
  
  #galleryUploadBtn i {
    font-size: 50px;
    color: #1fb6ae;
  }
  
  #galleryUploadBtn:hover i {
    color: #1fb6ae;
  }
  .image-gallery {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.thumbnail-container {
    display: flex;
    flex-direction: column;
}

.thumbnail {
    max-width: 100px;
    cursor: pointer;
    margin: 5px;
}

.large-image-container {
    padding: 10px;
}

#large-image {
    max-width: 100%;
}
#large-image {
    width: 100% !important;
    height: 350px !important;
    border: 3px solid #73bcab;
}
.small_image {
  height: 50px !important;
  width: 100% !important;
  border: 3px solid #0e2e50;

}
.card-box-ico {
  padding: 1rem 2.5rem 1rem 3rem;
  border: 5px solid #2eca6a;
}
.title-box-d .title-d {
  font-weight: 600 ;
  font-size: 2rem;
}
.title-box-d {
  padding-bottom: 1.8rem;
  margin-bottom: 1rem;
  position: relative;
}
@media (min-width: 992px) {
.title-c {
    font-size: 2.5rem;
}
}

.title-box-d .title-d:after {
  content: '';
  position: absolute;
  width: 70px;
  height: 4px;
  background-color: #2eca6a;
  bottom: 20px;
  right: 0;
}

.card-box-ico span {
  font-size: 4rem;
  color: #000000;
}
.bg-card {
  background: white;
  padding: 34px;
}
.list-a li {
  position: relative;
  width: 50%;
  float: left;
  padding-left: 25px;
  padding-right: 5px;
}
@media (min-width: 992px)
{
  .list-a li {
      width: 33.333%;
  }
}

.list-a li:before {
  content: '';
  width: 10px;
  height: 2px;
  position: absolute;
  background-color: #313131;
  top: 15px;
  right: 0;
}
.list-a {
  display: inline-block;
  line-height: 2;
  padding: 0;
  list-style: none;
}
.list-a li {
  position: relative;
  width: 50%;
  float: left;
  padding-right: 25px;
  padding-left: 5px;
}
.title-c {
  font-size: 2.5rem;
  font-weight: 600;
  margin-right: -40px;
}
@media (min-width: 992px)
{
  .title-c {
      font-size: 2.5rem;
      color: black;
  }
}
.intro-single {
  padding: 1rem !important;
}

.owl-carousel .owl-item .img-cu  {
  height: 350px !important;
  width: 97% !important;
}
.card-money {
  font-weight: 400;
  font-style: normal;
  text-transform: none;
  letter-spacing: 0em;
  border-radius: 0.4em;
  padding: 0.8em;
  background: linear-gradient(45deg,  #377fbf  ,  #0f3d67, #198754);
  border-color: #c3a84f;
  color: #ffffff !important;
  border: 0px !important;
  box-shadow: 0 0em 0em rgba(0,0,0,.2);
  padding: 1rem 2rem 1rem 1.5rem !important;
}
.card-box-ico span {
  color:white !important;
}
.card-box-ico span {
  font-size: 3rem !important;
}
.p-20 {
  padding: 20px !important;
}
.list-tems {
  list-style: none;
}
.pl-0 {
  padding-right: 0px !important;
}
.pt-20 {
  padding-top: 20px;
}
.socials-a {
    background-color: white;
    padding: 20px;
}
.socials-a .list-inline-item:not(:last-child) {
  margin-right: 3px !important;
}
#map {
  width: 100% !important;
  height: 400px !important;
  position: relative !important;
  overflow: hidden !important;
}
.map-show {
  width: 100% !important;
  height: 400px !important;
  position: relative !important;
  overflow: hidden !important;
}

body { 
	font-family: 'Ubuntu', sans-serif;
	font-weight: bold;
}
.select2-container {
  min-width: 400px;
}

.select2-results__option {
  padding-right: 20px;
  vertical-align: middle;
}
.select2-results__option:before {
  content: "";
  display: inline-block;
  position: relative;
  height: 20px;
  width: 20px;
  border: 2px solid #e9e9e9;
  border-radius: 4px;
  background-color: #fff;
  margin-right: 20px;
  vertical-align: middle;
}
.select2-results__option[aria-selected=true]:before {
  font-family:fontAwesome;
  content: "\f00c";
  color: #fff;
  background-color: #f77750;
  border: 0;
  display: inline-block;
  padding-left: 3px;
}
.select2-container--default .select2-results__option[aria-selected=true] {
	background-color: #fff;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
	background-color: #eaeaeb;
	color: #272727;
}
.select2-container--default .select2-selection--multiple {
	margin-bottom: 10px;
}
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
	border-radius: 4px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
	border-color: #f77750;
	border-width: 2px;
}
.select2-container--default .select2-selection--multiple {
	border-width: 2px;
}
.select2-container--open .select2-dropdown--below {
	
	border-radius: 6px;
	box-shadow: 0 0 10px rgba(0,0,0,0.5);

}
.select2-selection .select2-selection--multiple:after {
	content: 'hhghgh';
}
/* select with icons badges single*/
.select-icon .select2-selection__placeholder .badge {
	display: none;
}
.select-icon .placeholder {
	display: none;
}
.select-icon .select2-results__option:before,
.select-icon .select2-results__option[aria-selected=true]:before {
	display: none !important;
	/* content: "" !important; */
}
.select-icon  .select2-search--dropdown {
	display: none;
}
.select2-container {
  width: 100% !important;
  background-color: #EFFDF5 !important;
}
.select2-selection {
  background-color: #EFFDF5 !important;
height: 55px !important;
border: 0px !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__clear {
  margin-left:10px !important;
}
.select2-results__option[aria-selected=true]:before {
  background-color:blue !important;
}
.select2-results__option[aria-selected=true]:before {
  padding: 1px !important;
}
.select2-results__option:before {
  margin-left: 21px;
}
select2-results__option[aria-selected=true]:before {
  content: "\f00c";
  font-size: 15px;
}

.bi-arrow-left::before {
  content: "\f138";
}

.bi-arrow-right::before {
  content: "\f12f"
}

.header_text {
  background: -webkit-linear-gradient(#00b98e, #c3a84f);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
    font-family: 'system-ui';
}


.headeing-text h2 {
  font-weight: 600;
  font-size: 40px;
  line-height: 68px;
  color: #1c1c1c;
  display: block;
  margin: 0;
  text-transform: uppercase;
}
.headeing-subheading-text {
  color: #999;
  line-height: 40px;
  text-align: center;
  font-weight: 200;
font-size:20px;

}
.client-section .client-logo{
margin-bottom: 50px;
}
.client-section .client-logo .item {
  transition: transform 200ms cubic-bezier(.785, .135, .15, .86), box-shadow 200ms cubic-bezier(.785, .135, .15, .86);
  margin-bottom: 15px;
  background-color: #fff;
  margin: 10px;
  padding: 30px;
  border: 1px solid #efeeee;
}
.client-section .client-logo .item:hover {
  -ms-transform: translateY(-5px);
  transform: translateY(-5px);
}

.client-section .client-logo img:hover {
  opacity: 1;
  transition: all 0.3s ease-in-out 0s;
  -webkit-filter: grayscale(0);
  filter: grayscale(0);
}
.img_logo_partner {
  width: 100% ;
  min-height: 30px;
}
.img_logo_partner  {
  height: 50px !important;
}


.form-control:disabled, .form-control:read-only {
  background-color: #dee2e6;
  height: 40px!important;
  border: 0px !important;
}
.bg-search-section {
  background: linear-gradient(185deg, #00b98e, #63AEF4);
}
.form-control , .form-select {
  font-weight:bolder !important;
}

.form-select:disabled {
  background-color: #d1d1db;
}

.h-40 {
  height: 55px !important;
}


.bar {
  position: fixed;
  top: 67%;
  width: 35px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 9;
  border-radius: 40px;
}

.bar a {
  display: block;
  text-align: center;
  padding: 0;
  transition: all .3s ease;
  font-size: 15px;
}

.icon-bar a:hover {
  background-color: #000
}

.facebook {
  background: #3b5998;
  border-radius: 40px;
  color: #fff
}

.twitter {
  background: #55acee;
  border-radius: 40px;
  color: #fff
}

.tiktok {
  background: black;
  border-radius: 40px;
  color: #fff
}

.linkedin {
  background: #007bb5;
  color: #fff
}

.whatsapp {
  background: #15b12f;
  border-radius: 40px;
  color: #fff
}

.snap {
  background: #fffc00;
  border-radius: 40px;
  color: #fff
}
.youtube {
  background: red;
  border-radius: 40px;
  color: #fff
}

.telegram {
  border-radius: 40px;
  background: #229ED9;
  color: #fff
}

.instagram {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  border-radius: 40px;
  color: #fff
}

.icon2 {
  padding-top: 9px !important;
  padding-left: 10px !important;
  padding-right: 10px !important;
  padding-bottom: 9px !important;
  background: transparent !important;
  border:0px !important
}
.icon2-hover:hover {
  color: white !important;
}

.fa-tiktok:before {
  content: "\e07b" !important;
}


.container {
  /* padding-top: 60px; */
}
.dealwrapper {
  max-width: 320px;
  background: #ffffff;
  border-radius: 8px;
  -webkit-box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.15);
  position: relative;
}
.list-group {
  position: relative;
  display: block;
  background-color: #fff;
  border-radius: 5px;
}
.list-group h4 {
  font-size: 18px;
  margin-top: 6px;
  margin-bottom: 10px;
}
.list-group p {
  font-size: 13px;
  line-height: 1.4;
  margin-bottom: 10px;
  font-style: italic;
}
.list-group-item {
  display: block;
  padding: 10px 25px 10px 15px;
  border: 1px solid rgba(221, 221, 221, 0.25);
  text-decoration: none;
}
.list-group-item .heading {
  color: #141f31;
}
.list-group-item .text {
  color: #272727;
}
.list-group-item.active .heading,
.list-group-item.active .text {
  color: #ffffff;
}

.ribbon-wrapper {
  width: 88px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: 0px;
  left: -3px;
  z-index: 1;
}
.ribbon-tag {
  text-align: center;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  position: relative;
  padding: 7px 0;
  right: -5px;
  top: 11px;
  width: 120px;
  color: #ffffff;
  -webkit-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
  text-shadow: rgba(255, 255, 255, 0.5) 0px 1px 0px;
  background: linear-gradient(45deg, orange, #b71717);
}

.ribbon-tag:before,
.ribbon-tag:after {
  content: "";
  border-top: 3px solid #50504f;
  border-right: 3px solid transparent;
  border-left: 3px solid transparent;
  position: absolute;
  bottom: -3px;
}
.ribbon-tag:before {
  right: 0;
}
.ribbon-tag:after {
  left: 0;
}

.bg-dark {
  color: white !important;
  background:linear-gradient(45deg,  #377fbf  ,  #0f3d67, #198754);
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 0px;
  bottom: 0px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  left: 0px !important;
  bottom: 0px !important;
}

input:checked+.slider {
  background-color: #2196F3;
}

input:focus+.slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
    .font-12{
        font-size: 12px !important;
    }
.color-white {
  color: white !important;
}

._itemInfo_1a00s_182 {
    padding: 36px 50px 34px;
    background-color: #fff;
    box-shadow: 0 5px 50px #615d5d33;
    border-radius: 4px;
}
._overlay_1ry7l_28 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}
._overlay_1ry7l_28 img{
   height: auto;
    max-height: 400px;
    object-fit: cover;
    width: 100%;
}
    .navbar-light .navbar-nav .nav-link:hover {
    font-weight:500 !important;
}
.nav-bar {
  z-index: 9999 !important;
}


.main-carousel .owl-dots {
  position: absolute;
  top: 30px;
  right: 25px;
  width: 100%;
  height: 20px;
  text-align: right;
}

.main-carousel .owl-dot {
  position: relative;
  display: inline-block;
  margin: 0 5px;
  width: 20px;
  height: 20px;
  background: #FFFFFF;
  transition: .5s;
}

.main-carousel .owl-dot.active {
  width: 40px;
  background: #FFCC00;
}

.tranding-carousel .owl-nav {
  position: absolute;
  width: auto;
  height: 30px;
  top: calc(50% - 15px);
  right: -7px;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  z-index: 1;
}

.tranding-carousel .owl-nav .owl-prev,
.tranding-carousel .owl-nav .owl-next {
  position: relative;
  width: 30px;
  height: 30px;
  margin: 0 7px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #FFFFFF;
  background: transparent;
  border: 1px solid #FFFFFF;
  font-size: 16px;
  transition: .3s;
}

.tranding-carousel .owl-nav .owl-prev:hover,
.tranding-carousel .owl-nav .owl-next:hover {
  color: #FFFFFF;
  background: #FFCC00;
  border-color: #FFCC00;
}

.tranding-carousel.bg-white .owl-nav .owl-next {
  margin-right: 22px;
}

.tranding-carousel.bg-white .owl-nav .owl-prev,
.tranding-carousel.bg-white .owl-nav .owl-next {
  color: #31404B;
  border-color: #31404B;
}

.section-title {
  /*margin-bottom: 15px;*/
  padding: 15px;
  display: block;
  align-items: right;
  justify-content: space-between;
  background: #FFFFFF;
  border: 1px solid #dee2e6;
  border-left: 5px solid #FFCC00;
}
.section-title-ideas {
  display: flex !important;
  margin-bottom: 15px;
  display: block;
  justify-content: space-between;
  background: #FFFFFF;
  border: 1px solid #dee2e6;
  border-left: 5px solid #FFCC00;
}

.news-carousel .owl-nav {
  position: absolute;
  width: auto;
  height: 30px;
  top: -60px;
  right: 8px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1;
}

.news-carousel .owl-nav .owl-prev,
.news-carousel .owl-nav .owl-next {
  position: relative;
  width: 30px;
  height: 30px;
  margin: 0 7px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #31404B;
  background: transparent;
  border: 1px solid #31404B;
  font-size: 16px;
  transition: .3s;
}

.news-carousel .owl-nav .owl-prev:hover,
.news-carousel .owl-nav .owl-next:hover {
  color: #31404B;
  background: #FFCC00;
  border-color: #FFCC00;
}

.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  padding: 30px;
  top: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0), #1e2024);
  z-index: 1;
}

@media (min-width: 768px) {
  .news-lg {
    height: 350px;
  }
  .news-lg .border {
    border-left: none !important;
  }
}

@media (max-width: 767.98px) {
  .news-lg .border {
    border-top: none !important;
  }
}

.contact-form .help-block ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}


.badge-primary {
  color: #212529;
  background-color: #FFCC00;
}

a.badge-primary:hover, a.badge-primary:focus {
  color: #212529;
  background-color: #cca300;
}

a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, 0.5);
}

.badge-secondary {
  color: #fff;
  background-color: #31404B;
}

a.badge-secondary:hover, a.badge-secondary:focus {
  color: #fff;
  background-color: #1d262c;
}

a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(49, 64, 75, 0.5);
}

.badge-success {
  color: #fff;
  background-color: #28a745;
}

a.badge-success:hover, a.badge-success:focus {
  color: #fff;
  background-color: #1e7e34;
}

a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}


/*Profile Card 3*/
.profile-card-3 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  text-align: center;
  height: 325px;
  border:none;
}
.profile-card-3 .background-block {
    float: left;
    width: 100%;
    height: 168px;
    background-color: #1d2a3b;
    overflow: hidden;
}
.profile-card-3 .background-block .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(0.5px);
  filter: blur(0.5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-3 .card-content {
  width: 100%;
  padding: 15px 19px;
  color:#232323;
  float:left;
  background:#1d2a3b;
  height: 51%;
  border-radius:0 0 5px 5px;
  position: relative;
  z-index: 8000;
}
.profile-card-3 .card-content::before {
    content: '';
    background: #1d2a3b;
    width: 120%;
    height: 125px;
    left: 11px;
    bottom: 51px;
    position: absolute;
    z-index: -1;
    transform: rotate(-13deg);
}
.profile-card-3 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
  z-index:8888;
}
.profile-card-3 h2 {
  margin: 0 0 5px;
  color: white;
  font-weight: 600;
  -webkit-text-stroke: 0.3px red;
  font-size:25px;
}
.profile-card-3 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-3 i {
  display: inline-block;
    font-size: 16px;
    color: white;
    text-align: center;
    border: 1px solid white;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-3 .icon-block{
    float:left;
    width:100%;
    margin-top:0px !important;
}
.profile-card-3 .icon-block a{
    text-decoration:none;
}
.profile-card-3 i:hover {
  background-color:#232323;
  color:#fff;
  text-decoration:none;
}


.gradient-border {
  --border-width: 3px;
  position: relative;
  justify-content: center;
  align-items: center;
  font-family: Lato, sans-serif;
  font-size: 2.5rem;
  text-transform: uppercase;
  color: white;
  border-radius: var(--border-width);
  &::after {
    position: absolute;
    content: "";
    top: calc(-1 * var(--border-width));
    left: calc(-1 * var(--border-width));
    z-index: -1;
    width: calc(100% + var(--border-width) * 2);
    height: calc(100% + var(--border-width) * 2);
    background: linear-gradient(
      60deg,
      hsl(224, 85%, 66%),
      hsl(269, 85%, 66%),
      hsl(314, 85%, 66%),
      hsl(359, 85%, 66%),
      hsl(44, 85%, 66%),
      hsl(89, 85%, 66%),
      hsl(134, 85%, 66%),
      hsl(179, 85%, 66%)
    );
    background-size: 300% 300%;
    background-position: 0 50%;
    border-radius: calc(2 * var(--border-width));
    animation: moveGradient 4s alternate infinite;
  }
}

@keyframes moveGradient {
  50% {
    background-position: 100% 50%;
  }
}


@media (max-width: 768px){
      .m-20 {
        margin:20px 0px 20px 0px !important;
    }
        ._itemInfo_1a00s_182 {
    padding: 26px 27px 15px !important;
    background-color: #fff;
    box-shadow: 0 5px 50px #615d5d33;
    border-radius: 4px; 
}
    .bg-idea {
    display:none !important;}
}
}
.rate_img {
    height: 300px !important;
    object-fit: cover;
    width: 100%;
}

@media (min-width: 768px){

    ._itemImageCol_1a00s_209 {
        margin-top: -47px;
        margin-right: -44px;
        margin-left: auto;
    }

    /*.undefined {*/
    /*    margin: 0px 14px 0px 14px !important ;*/
    /*}*/
    .flex-row-reverse  ._itemInfoCol_1a00s_182 {
          margin-right: 44px !important;
    }
    
    .m-20 {
        margin:51px 0px 80px 0px  !important;
    }
    
}
.bg-idea {
    width:100px !important;
}
</style>



@endsection
@section('content')
<div class="undefined  wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div style="padding:10px 1px 10px 1px !important " class="section-title-ideas text-center position-relative   mx-auto">
            <h1  style="color: #178a8e !important; font-size: 48px;" class="fw-bold text-primary text-uppercase"> 
                <img class="bg-idea" src="{{ asset('assets/img/lamp.jpg')}}" alt="profile-sample1"  class="background"/> البوابة
            </h1>
            <h2 style="color: #ca1820 !important ; font-size: 33px;     line-height: 3rem;" >تتيح مساحة خاصة بكل مبرمج  وموهوب ومصور  ومبدع وفنان <br> وكل من لديه فكرة رائدة وتصميم جذاب وعمل غير عادي      </h2>
        </div>
        <div class="row ">
                <div class="col-12   text-center">
                     <div class="section-title-ideas text-center position-relative mx-auto" style="max-width: 100%; display:block !important">
                    <h2>   صديقنا العزيز أهلا وسهلا بك تفضل نحن معك قلبا وقالبا ابدأ مشوارك الفكري لعملائك    </h2>
                       @if(auth::user())
                         @if(auth::user()->ideas_id == 0)
                            <form id="ads_form" method="post" enctype="multipart/form-data" action="{{ route('ideas.request') }}" class="ajax-form" resetAfterSend  swalOnSuccess="تم ارسال طلبك بنجاح إلي المؤسسه" title="{{ __('pages.opps') }}"  swalOnFail="{{ __('pages.wrongdata') }}">
                                @csrf
                                <div class="form-group  align-items-center">
                                    <input type="hidden" name="id" class="form-control d-block search_input w-50" value="{{auth::user()->id}}">
                                    <button class=" btn btn-third mt-1   "> <i class="fa fa-send mr-3"> ارسل الطلب   </i></button>
                                </div>
                            </form>
                         @else   
                        <a href="{{ route('manage_slider')}}" class=" btn  btn-third mt-1 "> <i class="fa fa-plus mr-3"> ابدأ بالنشر    </i></a> 
                        <a href="{{ route('terms-home')}}" class=" btn btn-primary mt-1 "> <i class="fa fa-lock mr-3"> شروط الإستخدام    </i></a> 

                        @endif
                        @else 
                        <a href="{{ route('login')}}" class=" btn btn-third mt-1 "> <i class="fa fa-plus mr-3"> ابدأ بالنشر    </i></a> 
                    @endif
                </div> 
            </div>
        </div>

        <div class="row g-5 mb-5">
            @foreach ($users as $user ) 
                @if($user->slider )
                
                    <div class="col-lg-3">
                        <div class="" data-wow-delay="0.1s">
                            <div class="undefined  gradient-border mt-2 ">
                                <div class=" row">
                                    <a href="{{ route('ideas.add',['user' => $user->id])}}" class=" ">
                                        <div class="">
                                            <div class="card profile-card-3">
                                                <div class="background-block">
                                                  <h2 class="mt-3"> {{$user->slider->experience}} </h2>
                                                </div>
                                                  <div class="profile-thumb-block">
                                                    <img  @if($user->slider ) src="{{asset('assets/frontend/images/profile/'.$user->slider->image)}}"  @endif alt="profile-image" class="profile"/>
                                                </div>
                                                <div class="card-content">
                                                <h2>@if($user->slider ) {{$user->slider->full_name}} @endif<small>@if($user->slider )  @endif</small>                                                
                                                </h2>
                                                <h2>   {{$user->phone}} </h2>

                                                @if($user->social)
                                                    <div class="icon-block">
                                                        <a href="{{ $user->social->facebook}}"><i class="fa fa-facebook"></i></a>
                                                        <a href="{{ $user->social->twitter}}"> <i class="fa fa-twitter"></i></a>
                                                        <a href="{{ $user->social->google}}"> <i class="fa fa-snapchat"></i></a>
                                                        <a href="{{ $user->social->intagram}}"> <i class="fa fa-instagram"></i></a>
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>



@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
initialCountry: "SA",
utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

$(document).ready(function(){
    $('#contact-form').append(`<input class="d-none" name="country_code" value="966" />`);
    $('.iti__country-list li').click(function(){
        var dataVal = $(this).attr('data-dial-code');
        $('#contact-form').append(`<input class="d-none" name="country_code" value="${dataVal}" />`);
    });
});
</script>
@endsection