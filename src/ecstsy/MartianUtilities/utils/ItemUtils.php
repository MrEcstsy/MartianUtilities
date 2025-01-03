<?php

use pocketmine\item\Item;
use pocketmine\nbt\LittleEndianNbtSerializer;
use pocketmine\nbt\TreeRoot;

class ItemUtils {

    /**
     * Encodes an item into a base64 string using LittleEndianNbtSerializer.
     *
     * @param Item $item
     * @return string
     */
    public static function encodeItem(Item $item): string {
        $serializer = new LittleEndianNbtSerializer();
        return base64_encode($serializer->write(new TreeRoot($item->nbtSerialize())));
    }

    /**
     * Decodes an item from a base64 string using LittleEndianNbtSerializer.
     *
     * @param string $data
     * @return Item
     */
    public static function decodeItem(string $data): Item {
        $serializer = new LittleEndianNbtSerializer();
        return Item::nbtDeserialize($serializer->read(base64_decode($data))->mustGetCompoundTag());
    }
}
