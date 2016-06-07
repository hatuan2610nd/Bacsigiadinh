package com.mta.th10.bacsigiadinh.db;

import java.util.ArrayList;
import java.util.List;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import mta.th10.bacsigiadinh.models.Benh;
import mta.th10.bacsigiadinh.models.NhomBenh;
import mta.th10.bacsigiadinh.models.Thuoc;

public class BenhDB {
	
	private MyDB db = MyDB.getInstance();

	public List<NhomBenh> getAllNhomBenh() {
		List<NhomBenh> l = new ArrayList<NhomBenh>();

		SQLiteDatabase cmd = db.getReadableDatabase();

		Cursor c = cmd.rawQuery("select * from benh_category", null);
	
		
		if (c.moveToFirst()) {
			do {
				NhomBenh n = new NhomBenh();
				n.setId(c.getInt(0));
				n.setTen(c.getString(1));
				l.add(n);
			} while (c.moveToNext());
		}
		c.close();
		db.close();
		return l;
	}

	public static void setFavorite(Benh benh, boolean value) {
		SQLiteDatabase db = MyDB.getInstance().getReadableDatabase();
		db.execSQL("update benh_chitiet set is_favorited = " + (value ? "1" : "0") + " where benh_chitiet.id = '"
				+ benh.getId()+"'");
	}

	public List<Benh> getDanhSachBenh(NhomBenh nhom) {
		List<Benh> list = new ArrayList<Benh>();

		SQLiteDatabase cmd = db.getReadableDatabase();

		Cursor c = cmd.rawQuery("select * from benh_chitiet where  idcat = " + nhom.getId(), null);
		if (c.moveToFirst()) {
			do {
				Benh b = new Benh();
				b.setId(c.getString(0));
				b.setTen(c.getString(1));
				b.setContent(c.getString(2));

				b.setFavorite(c.getInt(c.getColumnIndex("is_favorited")) == 0 ? false : true);

				list.add(b);
			} while (c.moveToNext());
		}
		c.close();
		db.close();

		return list;
	}
	
	public List<Benh> getDanhSachFav() {
		List<Benh> list = new ArrayList<Benh>();

		SQLiteDatabase cmd = db.getReadableDatabase();

		Cursor c = cmd.rawQuery("select * from benh_chitiet where is_favorited = 1 ", null);
		if (c.moveToFirst()) {
			do {
				Benh b = new Benh();
				b.setId(c.getString(0));
				b.setTen(c.getString(1));
				b.setContent(c.getString(2));

				b.setFavorite(c.getInt(c.getColumnIndex("is_favorited")) == 0 ? false : true);

				list.add(b);
			} while (c.moveToNext());
		}
		c.close();
		db.close();

		return list;
	}

}
