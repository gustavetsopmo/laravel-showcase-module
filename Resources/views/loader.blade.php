<style>
    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 10000;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .cv-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        box-sizing: border-box;
        overflow: hidden;
    }

    .cv-spinner img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 70%;
        height: auto;
    }

    .cv-spinner .spinner {
        position: absolute;
        width: 80px;
        height: 80px;
        border: 4px #ddd solid;
        border-top: 4px #3399ff solid;
        box-sizing: border-box;
        border-radius: 50%;
        animation: sp-anime 0.8s infinite linear;
    }

    @keyframes sp-anime {
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<div id="overlay" class="d-none">
    <div class="cv-spinner">
        <x-application-logo style="display: block; height: 3rem" />
        <span class="spinner">
        </span>
    </div>
</div>
