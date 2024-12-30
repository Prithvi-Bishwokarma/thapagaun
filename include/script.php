<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/factory.js"></script>
<script src="./assets/js/jquery.mixitup.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
        function data()
        {
            var a=document.getElementById("n1") .value;
            var b=document.getElementById("n2") .value;
            var c=document.getElementById("n3") .value;
            var d=document.getElementById("n4") .value;
            var e=document.getElementById("n5") .value;

            if(a==""||b==""||c==""||d==""||e=="")
            {
                alert("All Field are mendatory");
                return false;
            }
            else if(b.length < 10 || b.lenght > 10)
            {
                alert("Number should be of 10 digit! Please enter valid number");
                return false;
            }
            else if(isNaN(b))
            {
                alert("Only Number are allowed! Please enter valid number");
                return false;
            }
            else
            {
                true;
            }
        }
    </script>
