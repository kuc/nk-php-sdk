<?php

/*
 * Copyright 2011 Nasza Klasa Spółka z ograniczoną odpowiedzialnością
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * Ten plik jest przykładem zamykania sesji autentykacji NKConnect
 */

// Załaduj wspólny plik konfiguracji
require 'authentication2config.php';

unset($_SESSION['logged_in']);

$auth = new NKConnect($conf);
$auth->logout();
header("Location: authentication2.php");
