<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace Google\Service\Test;

use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testIncludes()
    {
        foreach ($this->getServiceClasses() as $class) {
            $this->assertTrue(
                class_exists($class),
                sprintf('Failed asserting class %s exists.', $class)
            );
        }
    }

    public function testCaseConflicts()
    {
        $apis = $this->apiProvider();
        $classes = array_unique(array_map('strtolower', $apis));
        $this->assertCount(count($apis), $classes);
    }

    public function getServiceClasses()
    {
        $classes = array();
        $classes[] = 'Google_Service_MyBusiness';
        foreach (glob(__DIR__ . "/../src/MyBusiness/*.php") as $file) {
            $className = basename($file, '.php');
            $classes[] = "Google_Service_{MyBusiness}_" . $className;
        }
        foreach (glob(__DIR__ . "/../src/MyBusiness/*/*.php") as $file) {
            $parts = explode('../src', $file);
            $namespace = array_pop($parts);
            $namespace = str_replace(['.php', '/'], ['', '_'], $namespace);
            $classes[] = "Google_Service_MyBusiness_" . $namespace ; // legacy name
        }

        return $classes;
    }

    public function apiProvider()
    {
        return array_filter(glob(__DIR__ . '/../src/*'), 'is_dir');
    }
}
