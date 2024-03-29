<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="imagenes" href="{{asset('img/favicon.ico')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <title>Quas |Productos</title>

        <!-- Fonts--> 
        <link href="{{asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
    </head>
    <body>
        @yield('redes')
        <section id="headerSection_nosotros">
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
        </section>
        @yield('title')
        <div class="body_categorias">
            @yield('products')
        </div>
        
       @yield('footer')
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/responsive.js') }}"></script>
    <script src="{{asset('js/security.js') }}"></script>
    <script src="{{asset('js/typed.js') }}"></script>
    <script>
	var typed = new Typed('.type', {
        strings: ['<span><i class="fas fa-check"></i></span> Certificaciones', 
                '<span><i class="fas fa-check"></i></span> Asesorias',
                '<span><i class="fas fa-check"></i></span> Normas Iso'],
    typeSpeed:60,backSpeed:60,loop:true});
    </script>
    <script>
        let canvas, ctx, w, h, laser, text, particles, input;

function Laser(options) {
    options = options || {};
    this.lifespan = options.lifespan || Math.round(Math.random() * 20 + 20);
    this.maxlife = this.lifespan;
    this.color = options.color || '#fd2423';
    this.x = options.x || Math.random() * w;
    this.y = options.y || Math.random() * h;
    this.width = options.width || 2;

    this.update = function(index, array) {
        this.lifespan > 0 && this.lifespan--;
        this.lifespan <= 0 && this.remove(index, array);
    }

    this.render = function(ctx) {
        if (this.lifespan <= 0) return;
        ctx.beginPath();
        ctx.globalAlpha = this.lifespan / this.maxlife;
        ctx.strokeStyle = this.color;
        ctx.lineWidth = this.width;
        ctx.moveTo(this.x, this.y);
        ctx.lineTo(w, this.y);
        ctx.stroke();
        ctx.closePath();
    }

    this.remove = function(index, array) {
        array.splice(index, 1);
    }
}

function Spark(options) {
    options = options || {};
    this.x = options.x || w * 0.9;
    this.y = options.y || h * 0.9;
    this.v = options.v || { direct: Math.random() * Math.PI * 2, weight: Math.random() * 10 + 2, friction: 0.94 };
    this.a = options.a || { change: Math.random() * 0.2 - 0.1, min: this.v.direct - Math.PI * 0.4, max: this.v.direct + Math.PI * 0.4 };
    this.g = options.g || { direct: Math.PI * 0.5 + (Math.random() * 0.4 - 0.2), weight: Math.random() * 0.5 + 0.5 };
    this.width = options.width || Math.random() * 3;
    this.lifespan = options.lifespan || Math.round(Math.random() * 20 + 40);
    this.maxlife = this.lifespan;
    this.color = options.color || '#fdab23';
    this.prev = { x: this.x, y: this.y };

    this.update = function(index, array) {
        this.prev = { x: this.x, y: this.y };
        this.x += Math.cos(this.v.direct) * this.v.weight;
        this.x += Math.cos(this.g.direct) * this.g.weight;
        this.y += Math.sin(this.v.direct) * this.v.weight;
        this.y += Math.sin(this.g.direct) * this.g.weight;
        this.v.weight *= this.v.friction;
        this.v.direct += this.a.change;
        (this.v.direct > this.a.max || this.v.direct < this.a.min) && (this.a.change *= -1);
        this.lifespan > 0 && this.lifespan--;
        this.lifespan <= 0 && this.remove(index, array);
    }

    this.render = function(ctx) {
        if (this.lifespan <= 0) return;
        ctx.beginPath();
        ctx.globalAlpha = this.lifespan / this.maxlife;
        ctx.strokeStyle = this.color;
        ctx.lineWidth = this.width;
        ctx.moveTo(this.x, this.y);
        ctx.lineTo(this.prev.x, this.prev.y);
        ctx.stroke();
        ctx.closePath();
    }

    this.remove = function(index, array) {
        array.splice(index, 1);
    }
}

function Particles(options) {
    options = options || {};
    this.max = options.max || Math.round(Math.random() * 20 + 10);
    this.sparks = [...new Array(this.max)].map(() => new Spark(options));

    this.update = function() {
        this.sparks.forEach((s, i) => s.update(i, this.sparks));
    }

    this.render = function(ctx) {
        this.sparks.forEach(s => s.render(ctx));
    }
}

function Text(options) {
    options = options || {};
    const pool = document.createElement('canvas');
    const buffer = pool.getContext('2d');
    pool.width = w;
    buffer.fillStyle = '#000000';
    buffer.fillRect(0, 0, pool.width, pool.height);

    this.size = options.size || 100;
    this.copy = (options.copy || `Hello!`) + ' ';
    this.color = options.color || '#fecd96';
    this.delay = options.delay || 4;
    this.basedelay = this.delay;
    buffer.font = `${this.size}px Comic Sans MS`;
    this.bound = buffer.measureText(this.copy);
    this.bound.height = this.size * 1.5;
    this.x = options.x || w * 0.5 - this.bound.width * 0.5;
    this.y = options.y || h * 0.5 - this.size * 0.5;

    buffer.strokeStyle = this.color;
    buffer.strokeText(this.copy, 0, this.bound.height * 0.8);
    this.data = buffer.getImageData(0, 0, this.bound.width, this.bound.height);
    this.index = 0;

    this.update = function() {
        if (this.index >= this.bound.width) {
            this.index = 0;
            return;
        }
        const data = this.data.data;
        for (let i = this.index * 4; i < data.length; i += (4 * this.data.width)) {
            const bitmap = data[i] + data[i + 1] + data[i + 2] + data[i + 3];
            if (bitmap > 255 && Math.random() > 0.86) {
                const x = this.x + this.index;
                const y = this.y + (i / this.bound.width / 4);
                laser.push(new Laser({
                    x: x,
                    y: y
                }));
                Math.random() > 0.7 && particles.push(new Particles({
                    x: x,
                    y: y
                }));
            }
        }
        this.delay-- < 0 && (this.index++ && (this.delay += this.basedelay));
    }

    this.render = function(ctx) {
        ctx.putImageData(this.data, this.x, this.y, 0, 0, this.index, this.bound.height);
    }
}

function loop() {
    update();
    render();
    requestAnimationFrame(loop);
}

function update() {
    text.update();
    laser.forEach((l, i) => l.update(i, laser));
    particles.forEach(p => p.update());
}

function render() {
    ctx.globalCompositeOperation = 'source-over';
    ctx.globalAlpha = 0.9;
    ctx.fillStyle = '#000000';
    ctx.fillRect(0, 0, w, h);
    //
    ctx.globalCompositeOperation = 'screen';
    text.render(ctx);
    laser.forEach(l => l.render(ctx));
    particles.forEach(p => p.render(ctx));
}

(function () {
    //
    canvas = document.getElementById('canvas');
    input = document.getElementById('input');
    ctx = canvas.getContext('2d');
    w = window.innerWidth;
    h = window.innerHeight;
    canvas.width = w;
    canvas.height = h;
    laser = [];
    particles = [];
    //
    text = new Text({
        copy: 'A tu disposicion'
                
    });
    canvas.addEventListener('click', (e) => {
        const x = e.clientX;
        const y = e.clientY;
        laser.push(new Laser({
            x: x,
            y: y
        }));
        particles.push(new Particles({
            x: x,
            y: y
        }));
    });
    let cb = 0;
    input.addEventListener('keyup', (e) => {
        clearTimeout(cb);
        cb = setTimeout(() => {
            text = new Text({
                copy: input.value
            });
        }, 300);
    });
    //
    loop();
})()

    </script>    
    </body>
</html>