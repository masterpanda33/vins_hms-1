<template>    
    <footer class="site-footer d-flex justify-content-center">
        <div class="page-copyright align-self-center">
            <td height="40" align="center" valign="bottom" class="footerfonts"><a href="index.php">Home</a> | <a href="http://vinshospital.com/content1.php?id=37">Contact</a> | 
      <!--Feedback |--><a href="sitemap.php">Sitemap</a><br>
    Copyright © 2009 VADODARA INSTITUTE OF NEUROLOGICAL SCIENCES. All rights reserved. </td>
        </div>
    </footer>
</template>

<script type="text/babel">
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear()
            }
        },

        mounted() {
                      
        }
    }
</script>
