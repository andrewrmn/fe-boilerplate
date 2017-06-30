<article class="section section--border" id="modal">
    <header class="section__hd">
        <h3 class="h-lg">Simple Modal</h3>
    </header>
    <p class="text-italic">Usage: pop-up content</p>
    <div class="module">
        <div class="module__display">

            <aside class="modal-wrap" id="test-modal">
                <div class="modal">
                    <div class="modal__close" data-click-target="test-modal" data-click-bodyClass="modal-is-active">
                        <div>
                            <p class="sr-only">Close Modal</p>
                            <svg width="18" height="18"><use xlink:href="#shape-close"></use></svg>
                        </div>
                    </div>
                    <div class="modal__inner">
                        <div class="text-group">
                            <p class="p p-sm">Pellentesque molestie erat vitae egestas placerat. Duis sodales tristique elit, a gravida sem. Etiam ut mattis augue. Integer malesuada volutpat quam non semper. Morbi vel placerat dui. Vivamus in ultrices nulla.</p>

                            <p class="p p-sm">Ut efficitur odio nunc, sed cursus odio imperdiet non. Quisque vitae nibh nulla. Nam quis lectus id quam egestas fermentum vitae sit amet est. Etiam tincidunt tristique tortor ultrices blandit. Suspendisse malesuada, lacus eget porta mattis, orci lectus blandit arcu, et aliquam ex lectus a metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas eros augue, aliquam ac ante ac, vulputate faucibus ipsum.</p>

                            <p class="p p-sm">In tellus quam, sollicitudin quis purus nec, finibus vehicula nulla. Cras eu diam efficitur, pretium lorem eget, gravida risus. In hac habitasse platea dictumst. Sed quis risus imperdiet, maximus ante eu, tincidunt ex. Suspendisse tortor libero, finibus sed maximus quis, dictum vitae urna. Donec eu dignissim nulla, rhoncus eleifend odio. Maecenas pretium bibendum est, sit amet faucibus justo convallis vel.</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>


<pre><code class="language-markup">
<!-- Trigger -->
<div class="link" data-click-target="test-modal" data-click-bodyClass="modal-is-active">Open Modal</div>

<!-- Modal -->
<aside class="modal-wrap" id="test-modal">
    <div class="modal">
        <div class="modal__close" data-click-target="test-modal" data-click-bodyClass="modal-is-active">
            <div>
                <p class="sr-only">Close Modal</p>
                <svg width="18" height="18"><use xlink:href="#shape-close"></use></svg>
            </div>
        </div>
        <div class="modal__inner">
            <div class="text-group">
                <p class="p p-sm">Pellentesque molestie erat vitae egestas placerat. Duis sodales tristique elit, a gravida sem. Etiam ut mattis augue. Integer malesuada volutpat quam non semper. Morbi vel placerat dui. Vivamus in ultrices nulla.</p>

                <p class="p p-sm">Ut efficitur odio nunc, sed cursus odio imperdiet non. Quisque vitae nibh nulla. Nam quis lectus id quam egestas fermentum vitae sit amet est. Etiam tincidunt tristique tortor ultrices blandit. Suspendisse malesuada, lacus eget porta mattis, orci lectus blandit arcu, et aliquam ex lectus a metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas eros augue, aliquam ac ante ac, vulputate faucibus ipsum.</p>

                <p class="p p-sm">In tellus quam, sollicitudin quis purus nec, finibus vehicula nulla. Cras eu diam efficitur, pretium lorem eget, gravida risus. In hac habitasse platea dictumst. Sed quis risus imperdiet, maximus ante eu, tincidunt ex. Suspendisse tortor libero, finibus sed maximus quis, dictum vitae urna. Donec eu dignissim nulla, rhoncus eleifend odio. Maecenas pretium bibendum est, sit amet faucibus justo convallis vel.</p>
            </div>
        </div>
    </div>
</aside>
</code></pre>
</div>
</article>
