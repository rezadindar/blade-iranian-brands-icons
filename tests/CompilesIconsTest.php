<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use MRDindar\IranianBrandsIcons\BladeIranianBrandsIconsServiceProvider;
use Orchestra\Testbench\TestCase;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('irbrands-enamad')->toHtml();

        // Note: the empty class here seems to be a Blade components bug.
        $expected = <<<'SVG'
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" role="img"><path d="M0 20.766a42.59 42.59 0 0 1 7.814-4.644c4.267-1.892 8.33-4.988 8.33-9.083s-1.688-4.611-2.687-4.611c-1.376 0-5.373 1.638-6.643 8.567-1.27 6.929 1.548 10.418 3.924 10.557 2.375.14 3.333-.401 4.815-3.497 1.401-1.048 2.589-1.343 2.908-2.85a.696.696 0 0 0-.622-.82l-.64-.081a2.015 2.015 0 0 1 1.377-.967c.925-.139 1.548-1.752 1.548-1.752s-3.276.647-5.234 5.332c-1.957 4.685-5.733 2.408-6.053.516a16.282 16.282 0 0 1 1.557-11.254c2.154-3.751 6.61-.819 2.154 4.472C8.19 14.991.377 16.605 0 20.766zm20.95-8.69.82 1.368a.532.532 0 0 0 .819.123l1.237-1.09a.549.549 0 0 0 .098-.68l-.819-1.343a.532.532 0 0 0-.82-.122l-1.236 1.105a.54.54 0 0 0-.098.64z"/></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('irbrands-enamad', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" role="img"><path d="M0 20.766a42.59 42.59 0 0 1 7.814-4.644c4.267-1.892 8.33-4.988 8.33-9.083s-1.688-4.611-2.687-4.611c-1.376 0-5.373 1.638-6.643 8.567-1.27 6.929 1.548 10.418 3.924 10.557 2.375.14 3.333-.401 4.815-3.497 1.401-1.048 2.589-1.343 2.908-2.85a.696.696 0 0 0-.622-.82l-.64-.081a2.015 2.015 0 0 1 1.377-.967c.925-.139 1.548-1.752 1.548-1.752s-3.276.647-5.234 5.332c-1.957 4.685-5.733 2.408-6.053.516a16.282 16.282 0 0 1 1.557-11.254c2.154-3.751 6.61-.819 2.154 4.472C8.19 14.991.377 16.605 0 20.766zm20.95-8.69.82 1.368a.532.532 0 0 0 .819.123l1.237-1.09a.549.549 0 0 0 .098-.68l-.819-1.343a.532.532 0 0 0-.82-.122l-1.236 1.105a.54.54 0 0 0-.098.64z"/></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('irbrands-enamad', ['style' => 'color: #555'])->toHtml();

        $expected = <<<'SVG'
            <svg style="color: #555" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" role="img"><path d="M0 20.766a42.59 42.59 0 0 1 7.814-4.644c4.267-1.892 8.33-4.988 8.33-9.083s-1.688-4.611-2.687-4.611c-1.376 0-5.373 1.638-6.643 8.567-1.27 6.929 1.548 10.418 3.924 10.557 2.375.14 3.333-.401 4.815-3.497 1.401-1.048 2.589-1.343 2.908-2.85a.696.696 0 0 0-.622-.82l-.64-.081a2.015 2.015 0 0 1 1.377-.967c.925-.139 1.548-1.752 1.548-1.752s-3.276.647-5.234 5.332c-1.957 4.685-5.733 2.408-6.053.516a16.282 16.282 0 0 1 1.557-11.254c2.154-3.751 6.61-.819 2.154 4.472C8.19 14.991.377 16.605 0 20.766zm20.95-8.69.82 1.368a.532.532 0 0 0 .819.123l1.237-1.09a.549.549 0 0 0 .098-.68l-.819-1.343a.532.532 0 0 0-.82-.122l-1.236 1.105a.54.54 0 0 0-.098.64z"/></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeIranianBrandsIconsServiceProvider::class,
        ];
    }
}
