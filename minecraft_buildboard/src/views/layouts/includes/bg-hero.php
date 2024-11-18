<div class="parallax-container">
    <div class="parallax-layers">
        <!-- Sky Layer -->
        <div class="layer-sky">
            <div class="sky-background">
                <picture>
                    <source media="(min-width: 3440px)">
                    <img role="presentation" class="parallax-image" src="/project_website/minecraft_buildboard/public/assets/images/Sky_Sun.png">
                </picture>
            </div>
            <div class="sky-details">
                <picture>
                    <source media="(min-width: 3440px)">
                    <img role="presentation" class="parallax-image" src="/project_website/minecraft_buildboard/public/assets/images/Clouds.png">
                </picture>
            </div>
        </div>

        <!-- Background Layer -->
        <div class="layer-background">
            <div class="background-main">
                <picture>
                    <source media="(min-width: 3440px)">
                    <img role="presentation" class="parallax-image parallax-effect" src="/project_website/minecraft_buildboard/public/assets/images/BG_Near.png">
                </picture>
            </div>
        </div>

        <!-- Focus Layer -->
        <div class="layer-focus">
            <div class="focus-main">
                <picture>
                    <source media="(min-width: 3440px)">
                    <img role="presentation" class="parallax-image " src="/project_website/minecraft_buildboard/public/assets/images/Focus_Cherry.png">
                </picture>
            </div>
        </div>

        <!-- Foreground Layer -->
        <div class="layer-foreground">
            <div class="foreground-main">
                <picture>
                    <source media="(min-width: 3440px)">
                    <img role="presentation" class="parallax-image parallax-effect" src="/project_website/minecraft_buildboard/public/assets/images/Foreground.png">
                </picture>
            </div>
        </div>

        

    </div>
</div>

<script>
const parallaxElements = document.querySelectorAll('.parallax-effect');

window.addEventListener('scroll', function () {
    const scrollY = window.scrollY;

    parallaxElements.forEach(element => {
        const elementOffsetTop = element.offsetTop; // Get the position of the element
        const distanceFromTop = elementOffsetTop - scrollY; // Distance from the top of the viewport

        // Calculate the translateY value (move the element up as we scroll down)
        const translateY = distanceFromTop * 0.1;  // Adjust the multiplier to control the speed of the effect

        // Apply the translateY effect to lift the element
        element.style.transform = `translateY(${translateY}px)`;  // Apply vertical translation
    });
});

</script>