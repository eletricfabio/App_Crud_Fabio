<?php

Route::resource("/pessoas", PessoaController::class);
Route::post('/pessoas/search', PessoaController::class);