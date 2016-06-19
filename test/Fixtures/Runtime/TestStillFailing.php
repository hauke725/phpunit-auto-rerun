<?php

    namespace Alorel\PHPUnitRetryRunner\Fixtures\Runtime;

    use Alorel\PHPUnitRetryRunner\RetriableTestCase;

    class TestStillFailing extends RetriableTestCase {

        /**
         * @sleepTime  0
         * @retryCount 3
         */
        function testStillFails() {
            $this->assertTrue(false);
        }
    }