<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

/**
 * Base test case class for all tests in the application.
 *
 * This class extends the `Illuminate\Foundation\Testing\TestCase` class
 * and provides a common setup for testing.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
