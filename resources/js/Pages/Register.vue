<script setup>
import InputText from '@/Components/Input/InputText.vue';
import InputNumber from '@/Components/Input/InputNumber.vue';
import BtnPrimary from '@/Components/Btn/BtnPrimary.vue';
import ListJKelamin from '@/Components/ListJKelamin.vue';
</script>

<template>
    <form method="POST" action="#">
        <div class="mt-6">
            <label for="nik" class="block text-sm font-medium leading-5  text-gray-700">NIK</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <InputNumber v-model="nik" id="nik" type="nik" name="nik" required />
            </div>
        </div>
        
        <div class="mt-6">
            <label for="nama_lengkap" class="block text-sm font-medium leading-5  text-gray-700">Nama Lengkap</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <InputText id="nama_lengkap" type="nama_lengkap" name="nama_lengkap" required />
            </div>
        </div>

        <div class="mt-6">
            <label for="username" class="block text-sm font-medium leading-5 text-gray-700">Username</label>
            <div class="mt-1 flex rounded-md shadow-sm">
                <InputText id="username" type="username" name="username" required />
            </div>
        </div>

        <div class="mt-6">
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <InputText id="email" type="email" name="email" required />
            </div>
        </div>
        
        <div class="mt-6">
            <label for="jenis_kelamin" class="block text-sm font-medium leading-5 text-gray-700">Jenis Kelamin</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <ListJKelamin />
            </div>
        </div>

        <div class="mt-6">
            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Password</label>
            <div class="mt-1 rounded-md shadow-sm">
                <InputText id="password" type="password" name="password" required />
            </div>
        </div>

        <div class="mt-6">
            <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">Confirm Password</label>
            <div class="mt-1 rounded-md shadow-sm">
                <InputText id="password_confirmation" type="password" name="password_confirmation" required />
            </div>
        </div>
    </form>

    <p class="mt-2 cursor-pointer text-blue-500 hover:text-blue-600 w-fit">Have an account?</p>

    <div class="flex flex-col gap-2">
        <BtnPrimary>Create account</BtnPrimary>
    </div>
</template>

<script>
$(document).ready(function () {
    $(".input_number_only").on("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");
    });
})
</script>