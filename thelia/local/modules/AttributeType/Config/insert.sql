SELECT @max_id := IFNULL(MAX(`id`),0) FROM `attribute_type`;

INSERT INTO `attribute_type` (`id`, `slug`, `has_attribute_av_value`, `is_multilingual_attribute_av_value`, `pattern`, `css_class`, `input_type`, `max`, `min`, `step`, `created_at`, `updated_at`) VALUES
(@max_id + 1, 'color', 1, 0, '#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\\\\b', NULL, 'color', NULL, NULL, NULL, NOW(), NOW());

INSERT INTO `attribute_type_i18n` (`id`, `locale`, `title`, `description`) VALUES
(@max_id + 1, 'cs_CZ', 'barva', 'hexadecimální barva'),
(@max_id + 1, 'en_US', 'Color', 'Color hexadecimal'),
(@max_id + 1, 'es_ES', 'Color', 'Color hexadecimal'),
(@max_id + 1, 'fr_FR', 'Couleur', 'Couleur hexadécimal'),
(@max_id + 1, 'it_IT', 'Colore', 'Colore esadecimale'),
(@max_id + 1, 'ru_RU', 'цвет', 'шестнадцатеричное цвета');