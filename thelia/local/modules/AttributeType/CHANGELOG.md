# 1.2.3

- Resolve #8 Add method addOutputFields

# 1.2.2

- Fix check auth
- Fix methods and variables visibility

# 1.2.1

- -Fix double translation and Exception

# 1.2

- Add static methods getAttributeAv and getAttributeAvs in model AttributeType
- Fix the slug length to 50 characters in the template
- Add link to the tutorial

# 1.1.1

- Fix returns values depending on the language
- Fix display edit meta data for attribute availability has not i18n en_US
- Fix slug length to 50 characters
- Add large table in attribute edit, for attribute associated with more than 2 attribute types

# 1.1

- Add field type textarea
- Update UI configuration for large attribute title
- Fix #1 #2
- Add static method getFirstValues in model AttributeType
- Add field type boolean
- Add input args (attribute_type_id, attribute_type_slug) for loop attribute_availability_extend_attribute_type
- Add input arg attribute_type_slug for loop attribute_extend_attribute_type

# 1.0.1

- Fix for reserved slug, for avoid overwriting output variables  of loop
- Fix hook action list
- Add protection against multiple sending ajax
- Add helper methods in model AttributeType