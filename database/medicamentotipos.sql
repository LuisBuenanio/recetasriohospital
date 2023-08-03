CREATE TABLE `tipo_medicamento` (
  `id` bigint UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `tipo_medicamento`
  ADD PRIMARY KEY (`id`);  

ALTER TABLE `tipo_medicamento`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `medicamento`
  
  ADD KEY `medicamento_tipo_medicamento_id_foreign` (`tipo_medicamento_id`);

ALTER TABLE `medicamento`
    ADD CONSTRAINT `medicamento_tipo_medicamento_id_foreign` FOREIGN KEY (`tipo_medicamento_id`) REFERENCES `tipo_medicamento` (`id`) ON DELETE CASCADE;
