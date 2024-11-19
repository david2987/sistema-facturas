<script>
import PrimaryButton from '@/Components/PrimaryButton.vue';

export default {
    components: {
        PrimaryButton,
    },
};

</script>

<template>
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Agregar Productos</h1>
            <form class="w-full ">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-title">
                            Descripcion
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-title" type="text" placeholder="Producto Nombre">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-purchase-price">
                            Precio Compra
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-purchase-price" type="text" placeholder="$ XXXXX.00">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Precio Venta
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" type="password" placeholder="$ XXXXXX.00">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-city">
                            Impuestos
                        </label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>12.5</option>
                            <option>17.5</option>
                            <option>21</option>
                            <option>27</option>
                        </select>
                    </div>
                </div>
                <div>
                    <PrimaryButton >Agregar Producto</PrimaryButton>
                </div>

            </form>
        </div>

</template>
