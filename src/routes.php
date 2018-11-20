<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/playerCount', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/playerCount' route");
    $array = array(
            "redPlayers" => 20,
            "bluePlayers" => 40
        );
    return json_encode($array);
});

$app->get('/teams/cards', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/cards' route");
    $array = array(
        "redCards" => array(
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K"
        ),
        "blueCards" => array(
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K",
            "PGRpdiBjbGFzcz0iY2FyZCI+PGRpdiBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzM2MzYzNiIg
Y2xhc3M9InBhbmVsIHRvcCI+PGRpdiBjbGFzcz0icmFuayI+QTwvZGl2PjxkaXYgY2xhc3M9InN1
aXQiPkFjZSBvZiBDbHViczwvZGl2PjxkaXYgY2xhc3M9Imljb24iPjxzdmcgdmVyc2lvbj0iMS4x
IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8v
d3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczphPSJodHRwOi8vbnMuYWRvYmUuY29tL0Fkb2Jl
U1ZHVmlld2VyRXh0ZW5zaW9ucy8zLjAvIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjEwMCUiIGhl
aWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE4LjIgMTkuMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5l
dyAwIDAgMTguMiAxOS4xIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCBmaWxsPSIjMzYz
NjM2IiBkPSJNMTMuNiw3LjdjLTAuNiwwLTEuMiwwLjEtMS43LDAuM2MxLjEtMC44LDEuNy0yLjEs
MS43LTMuNmMwLTIuNS0yLTQuNS00LjUtNC41UzQuNSwyLDQuNSw0LjUgYzAsMS40LDAuNywyLjcs
MS43LDMuNkM1LjcsNy45LDUuMiw3LjcsNC41LDcuN0MyLDcuNywwLDkuOCwwLDEyLjNzMiw0LjUs
NC41LDQuNXM0LjUtMiw0LjUtNC41YzAsMCwwLDAsMCwwbDAsMGwwLDBjMCwwLDAsMCwwLDAgYzAs
Mi41LDIsNC41LDQuNSw0LjVjMi41LDAsNC41LTIsNC41LTQuNVMxNi4xLDcuNywxMy42LDcuN3oi
Lz4KPHBvbHlnb24gZmlsbD0iIzM2MzYzNiIgcG9pbnRzPSI2LjYsMTkuMSAxMS42LDE5LjEgOS4x
LDE0LjciLz48L2c+PC9zdmc+PC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0iY29udGVudCBvbmUiPjxk
aXY+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIg
eG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOmE9Imh0dHA6
Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMuMC8iIHg9IjBweCIgeT0i
MHB4IiB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzN3B4IiB2aWV3Qm94PSIwIDAgMTguMiAxOS4xIiBl
bmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpzcGFjZT0icHJlc2VydmUi
PjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42LDAtMS4yLDAuMS0xLjcs
MC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQuNS00LjVTNC41LDIsNC41
LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcuNyw0LjUsNy43QzIsNy43
LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVjMCwwLDAsMCwwLDBsMCww
bDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUsMCw0LjUtMiw0LjUtNC41
UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYzNjM2IiBwb2ludHM9IjYu
NiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rpdj48L2Rpdj48ZGl2IHN0
eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiAjMzYzNjM2IiBjbGFzcz0icGFuZWwgYm90dG9tIj48ZGl2
IGNsYXNzPSJyYW5rIj5BPC9kaXY+PGRpdiBjbGFzcz0ic3VpdCI+QWNlIG9mIENsdWJzPC9kaXY+
PGRpdiBjbGFzcz0iaWNvbiI+PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3Lncz
Lm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsi
IHhtbG5zOmE9Imh0dHA6Ly9ucy5hZG9iZS5jb20vQWRvYmVTVkdWaWV3ZXJFeHRlbnNpb25zLzMu
MC8iIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIw
IDAgMTguMiAxOS4xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOC4yIDE5LjEiIHhtbDpz
cGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGZpbGw9IiMzNjM2MzYiIGQ9Ik0xMy42LDcuN2MtMC42
LDAtMS4yLDAuMS0xLjcsMC4zYzEuMS0wLjgsMS43LTIuMSwxLjctMy42YzAtMi41LTItNC41LTQu
NS00LjVTNC41LDIsNC41LDQuNSBjMCwxLjQsMC43LDIuNywxLjcsMy42QzUuNyw3LjksNS4yLDcu
Nyw0LjUsNy43QzIsNy43LDAsOS44LDAsMTIuM3MyLDQuNSw0LjUsNC41czQuNS0yLDQuNS00LjVj
MCwwLDAsMCwwLDBsMCwwbDAsMGMwLDAsMCwwLDAsMCBjMCwyLjUsMiw0LjUsNC41LDQuNWMyLjUs
MCw0LjUtMiw0LjUtNC41UzE2LjEsNy43LDEzLjYsNy43eiIvPgo8cG9seWdvbiBmaWxsPSIjMzYz
NjM2IiBwb2ludHM9IjYuNiwxOS4xIDExLjYsMTkuMSA5LjEsMTQuNyIvPjwvZz48L3N2Zz48L2Rp
dj48L2Rpdj48L2Rpdj4K"
        )
        );
    return json_encode($array);
});

$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});
