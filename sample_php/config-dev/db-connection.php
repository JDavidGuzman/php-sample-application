<?php

return new PDO("mysql:host=sample_sql;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
