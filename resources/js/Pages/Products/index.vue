<template>
<div class="max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Listado de Productos</h1>

        <div class="mb-4">
            <input
                type="text"
                v-model="filters.search"
                placeholder="Buscar..."
                @input="fetchProducts"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
            />
        </div>

        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Título</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Precio Compra</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Precio Venta</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">% Impuestos</th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products.data" :key="product.id" class="hover:bg-gray-100">
                    <td class="px-6 py-4 border-b border-gray-200">{{ product.id }}</td>
                    <td class="px-6 py-4 border-b border-gray-200">{{ product.title }}</td>
                    <td class="px-6 py-4 border-b border-gray-200">{{ product.purchase_price }}</td>
                    <td class="px-6 py-4 border-b border-gray-200">{{ product.sale_price }}</td>
                    <td class="px-6 py-4 border-b border-gray-200">{{ product.tax }}</td>
                    <td class="px-6 py-4 border-b border-gray-200">
                        <button @click="editProduct(product)" class="text-blue-500 hover:underline mr-2">Editar</button>
                        <button @click="deleteProduct(product)" class="text-red-500 hover:underline">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <Pagination :links="products.links" @change="fetchProducts" />
    </div>
</template>

<script>
import { ref } from 'vue';

//  import { useForm, Inertia } from '@inertiajs/vue3';

import Pagination from '@/Components/Pagination.vue';


export default {
    props: {
        products: Object,
        filters: Object,
    },
    setup(props) {
        const filters = ref({ search: props.filters.search || '' });

        const fetchProducts = () => {

            Inertia.get(route('products.index'), { search: filters.value.search }, { preserveState: true });
        };

        return { filters, fetchProducts };
    },
};
</script>
